<?php
class UserManager
{
        public function addUser(array $users):void
            {
                foreach ($users as $user) 
                {
                    echo "Adding user: " . $user . "\n";    
                }
    }
}   $manager = new UserManager();
    $manager->addUser(['John', 'Jane', 'Jack']);