<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 14.05.2017
 * Time: 0:17
 */

require_once "question.php";
require_once "Results.php";

/** @var array $data */

if (is_file('result')) {
    $stringResult = file_get_contents('result');
    $result = unserialize($stringResult);
} else {
    $result = new Results();
}

$count = count($data);
while (true) {
    $i = rand(0, $count - 1);
    $item = $data[$i];
    if ($result->isKnow($item['command'])) {
        continue;
    }
    if (isset($item['en'])) {
        echo $item['en'] . PHP_EOL;
    } else {
        echo $item['ru'] . PHP_EOL;
    }
    $answer = fgets(STDIN);
    $answer = preg_filter("#[\t\r\n]#ui", '', $answer);
    if ($answer === 'exit') {
        break;
    }
    if ($answer === $item['command']) {
        $result->add($item['command'], true);
        echo "OK!" . $result->getDetailForFunc($item['command']) . PHP_EOL . PHP_EOL;
    } else {
        $result->add($item['command'], false);
        echo "ERROR!!! correct answer: " . $item['command'] . $result->getDetailForFunc($item['command']) . PHP_EOL . PHP_EOL;
    }

}
$result->printReport();
file_put_contents('result', serialize($result));