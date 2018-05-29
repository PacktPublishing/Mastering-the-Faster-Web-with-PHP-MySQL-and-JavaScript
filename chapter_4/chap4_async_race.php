<?php

// chap4_async_race.php

$laps[] = 0;
$laps[] = 0;
$laps[] = 0;

function car1(int &$lap) {
    while ($lap <= 10) {
        for ($x = 0; $x <= 200; $x++) {
            yield 0;
        }

        yield 1;
    }

    // If the car has finished its race, return null in order to remove the car from the race
    return;
}

function car2(int &$lap) {
    while ($lap <= 10) {
        for ($x = 0; $x <= 220; $x++) {
            yield 0;
        }

        yield 1;
    }

    // If the car has finished its race, return null in order to remove the car from the race
    return;
}

function car3(int &$lap) {
    while ($lap <= 10) {
        for ($x = 0; $x <= 230; $x++) {
            yield 0;
        }

        yield 1;
    }

    // If the car has finished its race, return null in order to remove the car from the race
    return;
}

function runner(array $cars, array &$laps) {
    $flag = FALSE;

    while (TRUE) {
        foreach ($cars as $key => $car) {
            $penalty = rand(0, 8);
            if($key == $penalty) {
                // We must advance the car pointer in order to truly apply the penalty to the "current" car
                $car->next();
            } else {
                // Check if the "current" car pointer points to an active race car
                if($car->current() !== NULL) {
                    // Check if the "current" car pointer points to a car that has completed a lap
                    if($car->current() == 1) {
                        $lapNumber = $laps[$key]++;
                        $carNumber = $key + 1;
                        if ($lapNumber == 10 && $flag === FALSE) {
                            echo "*** Car $carNumber IS THE WINNER! ***\n";
                            $flag = TRUE;
                        } else {
                            echo "Car $carNumber has completed lap $lapNumber\n";
                        }
                    }
                    // Advance the car pointer
                    $car->next();
                    // If the next car is no longer active, remove the car from the race
                    if (!$car->valid()) {
                        unset($cars[$key]);
                    }
                }
            }
        }

        // No active cars left! The race is over!
        if (empty($cars)) return;
    }
}

runner(array(car1($laps[0]), car2($laps[1]), car3($laps[2])), $laps);
