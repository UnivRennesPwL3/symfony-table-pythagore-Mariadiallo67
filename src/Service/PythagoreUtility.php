<?php


namespace App\Service;

class PythagoreUtility
{
    public function display(): string
    {
       
        $html = '<table border="1" style="border-collapse: collapse; width: 60%; margin: 20px auto;">';

        
        $html .= '<thead>';
        $html .= '<tr>';
        $html .= '<th style="background-color: #f2f2df; padding: 10px; text-align: center;"></th>'; 
        for ($i = 1; $i <= 10; $i++) {
            $html .= '<th style="background-color: #f2f2df; padding: 10px; text-align: center;">' . $i . '</th>';
        }
        $html .= '</tr>';
        $html .= '</thead>';

        
        $html .= '<tbody>';
        for ($i = 1; $i <= 10; $i++) {
            $html .= '<tr>';
            $html .= '<th style="background-color: #f2f2df; padding: 10px; text-align: center;">' . $i . '</th>'; 
            for ($j = 1; $j <= 10; $j++) {
                if ($i == $j) {
                    $html .= '<td style="padding: 10px; text-align: center;">X</td>'; 
                } else {
                    $html .= '<td style="padding: 10px; text-align: center;">' . ($i * $j) . '</td>';
                }
            }
            $html .= '</tr>';
        }
        $html .= '</tbody>';

        $html .= '</table>';

        return $html;
    }
}

