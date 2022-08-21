<?php

namespace Model {
    class Comment
    {
        public function __construct(
            private ?int $id = null,
            private ?string $email = null,
            private ?string $komentar = null
        ) {
        }
        public function getId(): ?int
        {
            return $this->id;
        }
        public function setId(?int $id): void
        {
            $this->id = $id;
        }
        public function getEmail(): ?string
        {
            return $this->email;
        }
        public function setEmail(?string $email): void
        {
            $this->email = $email;
        }
        public function getKomen(): ?string
        {
            return $this->komentar;
        }
        public function setKomen(?string $komentar): void
        {
            $this->komentar = $komentar;
        }
    }
}
