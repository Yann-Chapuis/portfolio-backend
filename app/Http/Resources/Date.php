<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Date extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        setlocale(LC_TIME, "fr_FR");
        $dateFull = $this->date;
        $date = explode('-', $dateFull);
        $dateN = $date[2];
        $dateD = date('D', strtotime($dateFull));
        $dateM = date('M', strtotime($dateFull));

        switch ($dateD) {
            case "Mon":
                $dateD = "Lun";
                break;
            case "Tue":
                $dateD = "Mar";
                break;
            case "Wed":
                $dateD = "Mer";
                break;
            case "Thu":
                $dateD = "Jeu";
                break;
            case "Fri":
                $dateD = "Ven";
                break;
            case "Sat":
                $dateD = "Sam";
                break;
            case "Sun":
                $dateD = "Dim";
                break;
        }

        switch ($dateM) {
            case "Jan":
                $dateM = "Jan";
                break;
            case "Feb":
                $dateM = "Fév";
                break;
            case "Mar":
                $dateM = "Mar";
                break;
            case "Apr":
                $dateM = "Avr";
                break;
            case "May":
                $dateM = "Mai";
                break;
            case "Jun":
                $dateM = "Juin";
                break;
            case "Jul":
                $dateM = "Jui";
                break;
            case "Aug":
                $dateM = "Août";
                break;
            case "Sep":
                $dateM = "Sep";
                break;
            case "Oct":
                $dateM = "Oct";
                break;
            case "Nov":
                $dateM = "Nov";
                break;
            case "Dec":
                $dateM = "Déc";
                break;
        }


        return [
            'date'=> $this->date,
            'dateN'=> $dateN,
            'dateD'=> strftime($dateD),
            'dateM'=> $dateM,
            'ville'=> $this->ville,
            'cp'=> $this->cp,
            'commentaire'=> $this->commentaire,
        ];
    }
}
