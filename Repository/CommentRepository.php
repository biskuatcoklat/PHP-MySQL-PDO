<?php

namespace Repository {

    use Model\Comment;

    interface CommentRepository
    {
        function insert(Comment $comment): Comment;
        function findById(int $id): Comment;
        function findAll(): array;
    }

    class CommentRepositoryimpl implements CommentRepository
    {
        public function __construct(private \PDO $koneksi)
        {
        }
        public function insert(Comment $comment): Comment
        {
            $sql = "INSERT INTO coments(email,komen) VALUES (?,?)";
            $statement = $this->koneksi->prepare($sql);
            $statement->execute([$comment->getEmail(), $comment->getKomen()]);

            $id = $this->koneksi->lastInsertId();
            $comment->setId($id);
            return $comment;
        }
        public function findById(int $id): Comment
        {
            $sql = "SELECT * FROM coments WHERE id=?";
            $statement = $this->koneksi->prepare($sql);
            $statement->execute([$id]);

            if ($row = $statement->fetch()) {
                return new Comment(id: $row["id"], email: $row["email"], komentar: $row["komen"]);
            }
        }
        public function findAll(): array
        {
            $sql = "SELECT * FROM coments";
            $statement = $this->koneksi->query($sql);
            $array = [];

            while ($row = $statement->fetch()) {
                $array[] = new Comment(id: $row["id"], email: $row["email"], komentar: $row["komen"]);
            }
            return $array;
        }
    }
}
