# watch_time
A basic php project to hands on during lnpp_workshop

## Clone the repository
```
git clone https://github.com/Improwised/watch_time.git
```

## What concepts do hands-on cover ?
- Variables
- Arrays
- Looping
- Conditions
- Database connection


## Notes

- Each exercise is build on top of other exercise. So, make sure each exercise is completed

### Exercise - 1 (Variables)
- Have to define variable in process_movie.php file
- Flow: User will fill the form define in pages/add.php
- On submit, form will submit data to process_movie.php which is in back folder
- process_movie.php contains watched variable example.
- You have to define variable for movieName and genre
- Make sure to print the variables on echo statement.

### Exercise - 2 (Condition)
- Have to define condition that if movie's name and genre is set, then and then only execute echo statement
- It is on index.php file
- Can see if variable is define or not using isset()

### Exercise - 3 (Array)
- Have to define an associative array called movie
- It should containe id, name and genre
- Exercise should be done in index.php file

### Exercise - 4 (Looping) 
- Rename movie array to movies and make it as array of associative array like movie.
- Loop through movies using foreach and see it's effect
- Exercise should be done in index.php

### Exercise - 5 (Function)
- Exercise should be done in back/greet.php
- Write greet() function
- It will echo alert message in script tags
- Uncomment the greet in request handlers
- Try to click out greet button in home page

### Exercise - 6 (Select movies from db) 
- For that, first user have to configure pg database with php
- see [pg_connection.md](https://github.com/Improwised/watch_time/blob/main/docs/pg_connection.md)
- Write select query to get movies that are watched
- Exercise should be done in index.php file

### Exercise - 7 (Demo of watched and unwatched)
- uncomment updateItemWatchValue() function in back/watch_toggle.php and see what happens when you click movie's watch or unwatched buttons

### Exercise - 8 (Add movie functionality)
- try to implement movie adding functionality, exercise can be found in back/process_movie.php
- movieName and genre should be defined
- update watch variable using ternery

### Exercise - 9 (Demo of deletion of movie)
- uncomment deleteItem() function in back/delete.php and see what happens when you click delete in any of movie

### Exercise - 10 (Updation of movie or series) Practice
- we have pages/edit.php file which contains edit form for perticuler movie or series
- Write db function to fetch details of movie from id, and provide it in get request as fetchDetails($id)
- Assign perticuler variables and edited html properly, so you can see details in that edit form
- If you do not understand task clearly, just read the comments in edit.php

- Next when you save the form, process will happen according to update_movie.php
- Implement updateDetails() function to update the database