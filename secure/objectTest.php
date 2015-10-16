<?php
    include('functions.php');

    $aPerson = new Person();
    $aPerson -> firstName = "Clara";
    $aPerson -> lastName  = "Oswald";

    say($aPerson ->firstName);
    say($aPerson ->lastName);

    $anotherPerson = new Person("The", "Doctor");
    say($anotherPerson->firstName);
    say($anotherPerson->lastName);

    $aUser = new User("Peter", "Parker", "spiderman", "web");
    say($aUser);

    say($aUser->login("wrongpassword"));
    say($aUser->login("web"));
    say($aUser->login("web"));

    say($aUser->speak("With great power comes great responsibility."));
    say($aPerson->speak("Run you clever boy and remember One Two Three"));

    $anotherUser = User::fromPerson($anotherPerson, "userid", "password");
    say($anotherUser);


?>