$(document).ready(function () {
       $('#filter-subject-select').click(function (e) { 
        $('.subjects-f').toggleClass('filter-actives-subject');
       });

       $('#filter-periodic-time').click(function (e) { 
        $('.periodic-time').toggleClass('periodic-time-activator');
       });
       
       $('#filter-subject-type').click(function (e) { 
        $('.types-f').toggleClass('types-f-activator');
       });

       $('#filter-work-time').click(function (e) { 
        $('.f-period').toggleClass('periodic-time-activator');
       });
});