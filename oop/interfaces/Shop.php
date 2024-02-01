<?php


class Shop implements Report, Client
{
    private $reports = [];

    public function read($i) {
        if (isset($this->reports[$i])) {
            echo $this->reports[$i];
        } else {
            echo "404 Not Found\n";
        }
    }

    public function write($i, $str) {
        $this->reports[$i] = $str;
    }

    public function buy($id) {
        $this->write($id, "Клієнт купив товар з ID $id.\n");
        echo $this->read($id);
    }

    public function repayment($id) {
        $this->write($id, "Клієнт повернув товар з ID $id.\n");
        echo $this->read($id);
    }

    public function __toString() {
        $str = "Дії клієнта:\n";
        foreach ($this->reports as $report) {
            $str .= $report;
        }

        return $str;
    }
}
