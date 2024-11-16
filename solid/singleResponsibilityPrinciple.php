<?php
    class User {
        private $name;
        public function __construct($name) {
            $this->name = $name;
        }
        public function getName() {
            return $this->name;
        }
    }
    class UserRepository {
        public function save(User $user) {
            // Save user to database
        }
    }
    class UserController {  
        private $userRepository;
        public function __construct(UserRepository $userRepository) {
            $this->userRepository = $userRepository;
        }
        public function createUser($name) {
            $user = new User($name);
            $this->userRepository->save($user);
        }
    }

?>