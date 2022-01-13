<?php

namespace App\Http\Controllers;

class CardsController extends Controller
{
    public function index()
    {
        return view('pages.cards');
    }

    function generateBingoCard(): array
    {
        $card_columns = [
            ["letter" => "B", "range_x" => 1, "range_y" => 15, "numbers_cant" => 5],
            ["letter" => "I", "range_x" => 16, "range_y" => 30, "numbers_cant" => 5],
            ["letter" => "N", "range_x" => 31, "range_y" => 45, "numbers_cant" => 4],
            ["letter" => "G", "range_x" => 46, "range_y" => 60, "numbers_cant" => 5],
            ["letter" => "O", "range_x" => 61, "range_y" => 75, "numbers_cant" => 5],
        ];

        $card = [];

        foreach ($card_columns as $column) {
            $card[$column["letter"]] = $this->getNumbers($column["range_x"], $column["range_y"], $column["numbers_cant"]);
        }

        return $card;
    }

    public function indexBingo()
    {
        return view('pages.bingo');
    }

    function getBingoNumber($list = []): array
    {
        $american_bingo = [
            "range_x" => 1,
            "range_y" => 75
        ];

        $list = $this->getNumbers($american_bingo['range_x'], $american_bingo['range_y'], 15);

        $number = $this->getNumbers($american_bingo['range_x'], $american_bingo['range_y'], 1);
        while (in_array($number, $list)) {
            $number = $this->getNumbers($american_bingo['range_x'], $american_bingo['range_y'], 1);
        }

        return [
            "list" => $list,
            "number" => $number,
        ];
    }

    function getNumbers($range_x, $range_y, $numbers_cant): array
    {
        $list = [];
        for ($i = 1; $i <= $numbers_cant; $i++) {
            $number = rand($range_x, $range_y);
            while (in_array($number, $list)) {
                $number = rand($range_x, $range_y);
            }
            array_push($list, $number);
        }
        return $list;
    }
}
