<?php 

require "database.php";

?>

<div class="edit">
                    
                <div class="edit_title">
                    Redigera en punkt på listan:
                </div>
                
            <form action="partials/change_name.php" method="POST">  
                <div class="change_from">
                           Byt från:
                </div>
                <div class="change_from_input">
                    <input type="text" name="old_title" id="old_title" value="Skriv in namnet på befintlig titel">
                </div>
                

                <div class="clear"></div>
            
                <div class="change_to">
                            Byt till:
                </div>
                
                <div class="change_to_input">
                    <input type="text" name="new_title" id="new_title" value="Skriv in en ny titel">
                </div>
                
                <div class="clear"></div>

        
                <div class="button_bottom">
                    <button type="submit" class="button_style button_style_blue">
                    Byt namn   <span class="glyphicon glyphicon-erase"></span> 
                    </button>
                <div class="clear"></div>
                </div>
                                <div class="clear"></div>      
            
            </form>
        </div>
   