var data={
    title1: "Hassan Tariq",
    balance1:100,
    currency1:"RPKS",
    IBAN1:"PKN12345654321"
};
display();
function display()
{
    document.getElementById("title").innerHTML=data.title1;
    document.getElementById("balance").innerHTML=data.balance1;
    document.getElementById("currency").innerHTML=data.currency1;
    document.getElementById("IBAN").innerHTML=data.IBAN1;
}
function deposit(e,val){
    if((val>='a'&& val<='z')||( val>='A' && val<='Z') ) {
    }
        if (e.key == "Enter") {
            data.balance1 += parseInt(val);
            display();
        }

}
function withdraw(e,val)
{ 
    if(e.key=="Enter")
    {
        data.balance1-= parseInt(val);
        display();
    }
}
