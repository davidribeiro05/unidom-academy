<?php

namespace Source\Models;

use Source\Core\Model;

class User extends Model
{
    public function __construct()
    {
        parent::__construct("user", ["id"], ["name", "last_name", "birth", "cpf", "genre"]);
    }

    public function bootstrap(string $name, string $last_name, string $birth, string $cpf, string $genre): ?User
    {
        $this->name = $name;
        $this->last_name = $last_name;
        $this->birth = $birth;
        $this->cpf = $cpf;
        $this->genre = $genre;
        return $this;
    }

    /**
     * @return bool|void
     */
    public function save(): bool
    {
        if (!$this->required()) {
            $this->message->warning("Nome, sobrenome, email e senha são obrigatórios");
            return false;
        }

        if (!$this->validateUserCpf($this->cpf)) {
            $this->message->error("Este CPF já consta em nossa base de dados!");
            return false;
        }

        /** Create */
        if (empty($this->id)) {
            $id = $this->create($this->safe());
            if ($this->fail()) {
                $this->message->error("Erro ao cadastrar, verifique os dados");
                return false;
            }
        }
        $this->data = $this->findById($id)->data();
        return true;
    }

    private function validateUserCpf($cpf): string
    {
        $userCpf = (new User())->find()->fetch(true);
        if (!$userCpf) {
            return $cpf;
        }

        foreach ($userCpf as $value) {
            if ($value->cpf == $cpf) {
                echo $this->message->error("Já existe um CPF Cadastrado");
                return false;
            }
        }
        return true;
    }

    public function lastInsertId(): int
    {
        $lastInserId = (new User())->find()->order("id DESC")->fetch();
        return $lastInserId->id;
    }

}