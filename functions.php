<?php
            $passwordLength = $_GET['len'] ?? false;
            $let = isset($_GET['let']) ? true : false;
            $num = isset($_GET['num']) ? true : false;
            $sym = isset($_GET['sym']) ? true : false;
            if ($passwordLength && ($let || $num || $sym)) {
                $allChar = '';
                if ($let) {
                    $allChar .= $letters;
                }
                if ($num) {
                    $allChar .= $numbers;
                }
                if ($sym) {
                    $allChar .= $symbols;
                }
                $randomPw = '';
                for ($i = 0; $i < $passwordLength; $i++) {
                    $randomPw .= $allChar[rand(0, strlen($allChar) - 1)];
                }
                var_dump($randomPw);
            }
