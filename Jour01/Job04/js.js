let année = 2023;

function bisextile(année){
    if(année % 4 == 0){
        console.log("true");
        return true;
    }else{
        console.log("false");
        return false;
    }
}

bisextile(année);