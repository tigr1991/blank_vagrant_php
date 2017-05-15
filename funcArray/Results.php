<?php

/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 14.05.2017
 * Time: 0:19
 */
class Results
{
    protected $countQuestion = 0;

    protected $countCorrectAnswer = 0;

    protected $countIncorrectAnswer = 0;

    protected $detail = [];

    public function add(string $function, bool $result)
    {
        $this->countQuestion++;
        if (!isset($this->detail[$function])) {
            $this->detail[$function] = [
                'count' => 0,
                'correct' => 0,
                'incorrect' => 0,
            ];
        }
        $this->detail[$function]['count']++;

        if ($result) {
            $this->countCorrectAnswer++;
            $this->detail[$function]['correct']++;
        } else {
            $this->countIncorrectAnswer++;
            $this->detail[$function]['incorrect']++;
        }
    }

    public function isKnow($func)
    {
        if (isset($this->detail[$func])) {
            $correct = $this->detail[$func]['correct'];
            $count = $this->detail[$func]['count'];
            $per = round($correct * 100 / $count, 0);
            return $per > 75 && $count >= 5;
        }
        return false;
    }

    public function printReport()
    {
        echo "Всего вопросов: {$this->countQuestion}" . PHP_EOL;
        echo "Процент правильных: " . round($this->countCorrectAnswer * 100 / $this->countQuestion) . PHP_EOL;
        uasort($this->detail, function ($a, $b) {
            $perA = round($a['correct'] * 100 / ($a['correct'] + $a['incorrect']), 0);
            $perB = round($b['correct'] * 100 / ($b['correct'] + $b['incorrect']), 0);
            if ($perA === $perB) {
                if ($a['correct'] === $b['correct']) {
                    return $a['incorrect'] < $b['incorrect'] ? -1 : 1;
                }
                return $a['correct'] > $b['correct'] ? -1 : 1;
            }
            return $perA > $perB ? -1 : 1;
        });
        $all = 79;
        $asked = 0;
        $know = 0;
        foreach ($this->detail as $func => $info) {
            $asked++;
            if ($this->isKnow($func)) {
                $know++;
            }
            $per = round($info['correct'] * 100 / ($info['correct'] + $info['incorrect']), 0);
            echo $func . " - " . $per . "% ({$info['correct']}/{$info['incorrect']})" . PHP_EOL;
        }
        echo "-------------------" . PHP_EOL;
        echo "result: $know/$asked/$all" . PHP_EOL;

    }

    public function getDetailForFunc($func)
    {
        if (isset($this->detail[$func])) {
            $correct = $this->detail[$func]['correct'];
            $incorrect = $this->detail[$func]['incorrect'];
            $count = $this->detail[$func]['count'];
            $per = round($correct * 100 / $count, 0);
            return " - $per% ($correct/$incorrect)";
        }
        return '';
    }
}