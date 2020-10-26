<?php


namespace Source\App;

use Source\Core\Controller;
use Source\Models\Room;
use Source\Models\RoomForUser;
use Source\Models\User;

class Site extends Controller
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");
    }

    public function home(): void
    {
        $title = "UNIDOM ACADEMY | A melhor escola da Bahia";
        echo $this->view->render("main", [
            "title" => $title
        ]);
    }

    public function welcome(): void
    {
        $title = "Bem vindo";
        echo $this->view->render("welcome", [
            "title" => $title
        ]);
    }

    public function profile(): void
    {
        $title = "Perfil do desenvolvedor";
        echo $this->view->render("profile", [
            "title" => $title
        ]);
    }

    public function register(?array $data): void
    {

        $rooms = (new Room())->find()->fetch(true);
        $title = "Cadastro";
        echo $this->view->render("register", [
            "title" => $title,
            "rooms" => $rooms
        ]);

        if (!empty($data)) {
            $user = (new User())->bootstrap(
                $data["name"],
                $data["last_name"],
                date_fmt($data["birth"]),
                $data["cpf"],
                $data["genre"]
            );

            if ($user->save()) {
                $userId = (new User())->lastInsertId();

                $roomName = (new Room())->findById($data["room"])->name;
                $roomForUser = (new RoomForUser())->bootstrap($userId, $data["room"]);

                if ($roomForUser->save()) {
                    echo $this->message->success("Usuário {$data["name"]} salvo com sucesso na sala " . $roomName)->render();
                }
            } else {
                echo $this->message->error("Por favor preencha todos os campos!")->render();
            }
        }
    }

    public function student(): void
    {
        $roomForUser = (new RoomForUser())->innerFind(["
         INNER JOIN user u ON (roomforuser.user = u.id)", "INNER JOIN room r ON (roomforuser.room = r.id)"],
            "u.name AS user_name, last_name , birth , cpf , genre, r.name as room ")->fetch(true);

        $title = "Alunos matrículados";
        echo $this->view->render("enrolled", [
            "title" => $title,
            "roomForUser" => $roomForUser
        ]);
    }
}