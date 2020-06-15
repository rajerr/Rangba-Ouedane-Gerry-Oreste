$(document).ready(function(){
   let offset = 0;
    //const tbody = jquery('#tbody');
    const tbody = document.getElementById("tbody");
    $.ajax({
            type: "POST",
            url: "../data/getUser.php",
            data: {limit:10,offset:offset},
            dataType: "JSON",
            success: function (data) {
                printData(data,tbody);
                offset +=10
            }
        });
    
        //  Scroll
    const scroller = $('#scroller')
    scroller.scroll(function(){

    const st = scroller[0].scrollTop;
    const sh = scroller[0].scrollHeight;
    const ch = scroller[0].clientHeight;

    console.log(st,sh, ch);
    
    if(sh-st <= ch){
        $.ajax({
            type: "POST",
            url: "../data/getUser.php",
            data: {limit:10,offset:offset},
            dataType: "JSON",
            success: function (data) {
                printData(data,tbody);
                offset +=10;
            }
        });
    }
       
    })

function printData(data,tbody){
    $.each(data, function(indice,users){
        $(tbody).append(`
        <tr>
            <td>${users.nom}</td>
            <td>${users.prenom}</td>
            <td>${users.score}</td>
            <td><input type="checkbox" name="statut" id="statut">Act/Inact</input></td>
            <td>
                <button class="border border-light" type="button"><img  src="../assets/Images/Icônes/ico-upd.png" alt=""></button>
                <button class="border border-light" type="button"><img src="../assets/Images/Icônes/ico-del.png" alt=""></button>
            </td>
        </tr>
    `);
});
}
})