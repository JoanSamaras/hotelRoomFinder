# hotelRoomFinder
web application for booking hotel rooms (2018)

*In order to run, please modify the connection parameters with MySQL server, inside `php/db.inc.php`*


## project details

php directory: Contains the implementation of the (backend) web service, serving JSON responses, which are consumed via ajax calls from the frotend.


## implementation details  

`index.php`: The starting page

User decides on the preferences of the room search and completes the form in 3 simple self-explanatory steps, which are stored as session variables. Then the user is redirected to `roomResultsG.php`, where the results of her/his search are loaded via ajax from the `php/searchRooms.php` endpoint. If there are no results with the specified filters, room suggestions are returned (see `php/searchRooms.php`).  
The user can interact with the results or suggestions from the `roomResultsG.php`, and update the search filters as well.  
`roomResultsG.php` >> Hotel Page Button: User is redirected to the `hotelPage.php`, which is templated to show the selected room's specs in-detail.  
`Profile.php`: The user can see hers/his bookings, favorites and reviews.
