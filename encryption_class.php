<?php
    /*
    This PHP Encryption class renders a variety of php encryption 
    methods.  PHP code written by Paul E. Coke (c)2024
    */

    class EncryptIt{

        //The method utilises a one way encryption method 
        //with md5.  If the users specifies a string in the first argument, 
        //the string will be encrpyted via md5.
        //Conversely, if the user specifies a filename the file will be 
        //encrypted using the md5_file method
        
        public static function enc_md5($str = "", $filename = ""){

                if($str != "" && $filename == ""){

                    return md5($str);
                }

                if($str == "" && $filename != ""){

                    if(is_file($filename)){

                        return md5_file($filename);

                    }
                    else{
                        
                        return false; 
                    }
                }          
            
        }

        //This method utilises one way encryption using Sha1.  It works 
        //in the same way as the method above ;-)
        public static function enc_sha1($str = "", $filename = ""){

                if($str != "" && $filename == ""){

                    return sha1($str);
                }


                if($str == "" && $filename != ""){

                    if(is_file($filename)){

                        return sha1_file($filename);

                    }else{

                        return false;
                    }
                }          
            
        }

        //The following two methods use Base 64 encryption 
        //to encode and decode a the string that is passed 
        //to the method.
        public static function enc_base64($str){


                return base64_encode($str);
        }


        public static function dec_base64($str){


                return base64_decode($str);
        }



    }

    /*******************   USAGE   ************************/

    //$text_encrypt = EncryptIt::enc_md5("cheeseandham", "");
    //echo $text_encrypt; 

    //$text_encrypt = EncryptIt::enc_md5("cheeseandham", "lorem.txt");
    //echo $text_encrypt; 

    //$text_encrypt = EncryptIt::enc_sha1("cheeseandham", "");
    //echo $text_encrypt; 

    //$text_encrypt = EncryptIt::enc_sha1("", "lorem.txt");
    //echo $text_encrypt; 


?>