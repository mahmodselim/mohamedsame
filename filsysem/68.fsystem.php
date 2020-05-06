<?php

/*
     file_put_contents(file, Data, MODE, Context)
     Mode :
     FILE_APPEND
     LOCK_EX
     FILE_USE_INCLUDE_PATH

*/
//file_put_contents('osama.txt', 'THIS IS ANTHOR CONTENT' ,FILE_APPEND);


file_put_contents('osama.txt', 'THIS IS ANTHOR CONTENT' ,FILE_APPEND | LOCK_EX);