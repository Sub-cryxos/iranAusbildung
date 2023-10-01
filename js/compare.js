$(document).ready(function () {
    $('.right-compare_box .header').click(function (e) {
        $('.select-part-r').toggleClass('rotate-i');
        $('.right-compare_box .comapre-body').toggleClass('active-au-b');
    });

    $(' .right-compare_box .comapre-body .list-of-asubildungs li ').click(function (e) {
        const valuePr = $(this).find("#persian_value").text();
        const valueDe =  $(this).find("#germany_value").text();
        console.log("log",valuePr)
        console.log("log",valueDe)

        $(' .right-compare_box  .ausbildung-title #pr').text(valuePr);
        $(' .right-compare_box .ausbildung-title #de').text(valueDe);
        persianTitle = valuePr;
        $('.pr-t-t').text(valuePr)
                $(".right-compare_box  .ausbildung-title h1").text(valuePr)
        $(".right-compare_box  .ausbildung-title h2").text(valueDe)

        
        $('.right-compare_box .comapre-body').removeClass('active-au-b');
    });


    $('.left-compare_box .header').click(function (e) {
        

        $('.select-part-l img').toggleClass('rotate-i');
        $(' .left-compare_box  .comapre-body').toggleClass('active-au-b');

    });


    $(' .left-compare_box .comapre-body .list-of-asubildungs li ').click(function (e) {
        const valuePr = $(this).find("#persian_value").text();
        const valueDe =  $(this).find("#germany_value").text();
        $('.left-compare_box .ausbildung-title #pr').text(valuePr);
        $(' .left-compare_box .ausbildung-title #de').text(valueDe);
        persianTitle = valuePr;
        $(' .pl-t-t ').text(valuePr)

        $(".left-compare_box .ausbildung-title h1").text(valuePr)
        $(".left-compare_box .ausbildung-title h2").text(valueDe)

        $(' .left-compare_box .comapre-body').removeClass('active-au-b');
    });


    // the list of ausbildungs 


});