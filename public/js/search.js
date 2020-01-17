$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function()
{
    console.log("connect search");
    $('#searchBtn').click(function(e){
        e.preventDefault();
            $.post($('#searchForm').attr('action'),{
            name: $('#name').val(),
            minPrice: $('#maxPrice').val(),
            maxPrice: $('#maxPrice').val(),
            bedrooms: $('#bedrooms').val(),
            bathrooms: $('#bathrooms').val(),
            storeys: $('#storeys').val(),
            garages: $('#garages').val(),
            }, function(result){
                    var data = JSON.parse(result);
                    console.log(data);
                });
    });
});