<?php

function mymonth($date){

    $newtime = substr($date, 5, -12);

    if($newtime == "01"){

        return "JAN";

    }

    else if($newtime == "02"){

        return "FEB";
    }

    else if($newtime == "03"){

        return "MAR";
    }

    else if($newtime == "04"){

        return "APR";
    }

    else if($newtime == "05"){

        return "MAY";
    }

    else if($newtime == "06"){

        return "JUN";
    }

    else if($newtime == "07"){

        return "JUL";
    }

    else if($newtime == "08"){

        return "AUG";
    }

    else if($newtime == "09"){

        return "SEP";
    }

    else if($newtime == "10"){

        return "OCT";
    }

    else if($newtime == "11"){

        return "NOV";
    }

    else if($newtime == "12"){

        return "DEC";
    }

    else{

        return "";
    }

}


function myday($date){

    $newtime = substr($date, 8, -9);

    return $newtime;

}


function myyear($date){

    $newtime = substr($date, 0, -15);

    return $newtime;

}

?>