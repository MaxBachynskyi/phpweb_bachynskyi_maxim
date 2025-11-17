<?
    class Subjects{
        public $subjects_array = array(
            "Конструювання програмного забезпечення",
            "Комп'ютерні мережі",
            "Дискретна математика",
            "Фізика",
            "Фізкультура",
            "Історія"
        );

        public $students = "Гамлет, Фанасій, Тарасов, Нестеров, Лютмінов";

        public function changeArray($value1, $value2){
            $this->subjects_array[ array_search($value1, $this->subjects_array) ] = $value2;
        }

        public function changeArray2($value1, $value2, $num){
            $count = 0;
            foreach($this->subjects_array as $ind=>$s){
                if($s == $value1){
                    $count++;
                }
                if($count == $num){
                    $s = str_replace($value1, $value2, $s);
                    $this->subjects_array[$ind] = $s;
                }
            }
        }

        public function show(){
            echo "<hr>";
            foreach($this->subjects_array as $s){
                echo $s;
                echo "<br>";
            }
            echo "<hr>";
        }

        public function sort(){
            asort($this->subjects_array);
        }

        public function exploading($str){
            $arr = explode(', ', $str);
            return $arr;
        }

        public function imploading($arr){
            $str = implode(', ', $arr);
            return $str;
        }

        public function show_unique(){
            $subjects_array = array_unique($this->subjects_array);
            echo "<hr>";
            foreach($subjects_array as $s){
                echo $s;
                echo "<br>";
            }
            echo "<hr>";
        }

        public function expansion(){
            foreach($this->subjects_array as $index=>$v){
                $this->subjects_array[$index] = array(
                    "name" => $v,
                    "hours" => rand(10,50)
                );
            }
        }

        public function show_as_table ($table=null){
            $table = $table == null ? $this->subjects_array : $table;
            foreach($table as $subject){
                echo "Subject: ".$subject["name"].", hours: ".$subject["hours"]."<br>";
            }
            echo "<hr>";
        }

        public function show_splitted_array(){
            $splitted_array = array_chunk($this->subjects_array, 3);
            $this->show_as_table($splitted_array[0]);
            $this->show_as_table($splitted_array[1]);
        }

    }
?>