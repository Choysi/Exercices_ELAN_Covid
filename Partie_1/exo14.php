                               

<?php

function age($date)
{
    $date = (2018 - 05 - 21);
    $age = date('Y') - $date;
    if (date('md') < date('md', strtotime($date))) {
        return $age - 1;
    }
    return $age;
}
echo "Age de la personne : " . age(1985 - 01 - 17);
