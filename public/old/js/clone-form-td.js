/*
Author: Tristan Denyer (based on Charlie Griefer's original clone code, and some great help from Dan - see his comments in blog post)
Plugin repo: https://github.com/tristandenyer/Clone-section-of-form-using-jQuery
Demo at http://tristandenyer.com/using-jquery-to-duplicate-a-section-of-a-form-maintaining-accessibility/
Ver: 0.9.4.1
Last updated: Sep 24, 2014

The MIT License (MIT)

Copyright (c) 2011 Tristan Denyer

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/
$(function () {
    $('#btnAdd').click(function () {
        var num     = $('.clonedInput').length, // Checks to see how many "duplicatable" input fields we currently have
            newNum  = new Number(num + 1),      // The numeric ID of the new input field being added, increasing by 1 each time
            newElem = $('#entry' + num).clone().attr('id', 'entry' + newNum).fadeIn('slow'); // create the new element via clone(), and manipulate it's ID using newNum value
    
    //alert(newNum);
    //alert('ID' + newNum + '_reference');

    /*  This is where we manipulate the name/id values of the input inside the new, cloned element
        Below are examples of what forms elements you can clone, but not the only ones.
        There are 2 basic structures below: one for an H2, and one for form elements.
        To make more, you can copy the one for form elements and simply update the classes for its label and input.
        Keep in mind that the .val() method is what clears the element when it gets cloned. Radio and checkboxes need .val([]) instead of .val('').
    */
        // H5 - section
        newElem.find('.heading-reference').attr('id', 'ID' + newNum + '_reference').attr('name', 'ID' + newNum + '_reference').html('Co-Author #' + newNum);

        // First name - text
        newElem.find('.label_fn').attr('for', 'ID' + newNum + '_first_name');
        newElem.find('.smoothborder1').attr('id', 'ID' + newNum + '_fname2').attr('name', 'ID' + newNum + '_fname2').val('');
        
        // Last name - text
        newElem.find('.label_ln').attr('for', 'ID' + newNum + '_last_name');
        newElem.find('.smoothborder2').attr('id', 'ID' + newNum + '_lname2').attr('name', 'ID' + newNum + '_lname2').val('');

        // Organization name - text
        newElem.find('.label_org').attr('for', 'ID' + newNum + '_org_name');
        newElem.find('.smoothborder3').attr('id', 'ID' + newNum + '_organi2').attr('name', 'ID' + newNum + '_organi2').val('');

        // Organization type - select
        newElem.find('.label_torg').attr('for', 'ID' + newNum + '_org_type');
        newElem.find('.sel_torg').attr('id', 'ID' + newNum + '_cb_typeorga2').attr('name', 'ID' + newNum + '_cb_typeorga2').val('');

        // Title - select
        newElem.find('.label_title').attr('for', 'ID' + newNum + '_title_name');
        newElem.find('.sel_title').attr('id', 'ID' + newNum + '_cb_title2').attr('name', 'ID' + newNum + '_cb_title2').val('');

        // Country - select
        newElem.find('.label_country').attr('for', 'ID' + newNum + '_country_name');
        newElem.find('.sel_country').attr('id', 'ID' + newNum + '_cb_country2').attr('name', 'ID' + newNum + '_cb_country2').val('');

        // Color - checkbox
        //newElem.find('.label_checkboxitem').attr('for', 'ID' + newNum + '_checkboxitem');
        //newElem.find('.input_checkboxitem').attr('id', 'ID' + newNum + '_checkboxitem').attr('name', 'ID' + newNum + '_checkboxitem').val([]);

        // Skate - radio
        //newElem.find('.label_radio').attr('for', 'ID' + newNum + '_radioitem');
        //newElem.find('.input_radio').attr('id', 'ID' + newNum + '_radioitem').attr('name', 'ID' + newNum + '_radioitem').val([]);

        // Email - text
        newElem.find('.label_email').attr('for', 'ID' + newNum + '_email_address');
        newElem.find('.smoothborder4').attr('id', 'ID' + newNum + '_email_author2').attr('name', 'ID' + newNum + '_email_author2').val('');


        // Twitter handle (for Bootstrap demo) - append and text
       //newElem.find('.label_twt').attr('for', 'ID' + newNum + '_twitter_handle');
        //newElem.find('.input_twt').attr('id', 'ID' + newNum + '_twitter_handle').attr('name', 'ID' + newNum + '_twitter_handle').val('');

    // Insert the new element after the last "duplicatable" input field
        $('#entry' + num).after(newElem);
        $('#ID' + newNum + '_title').focus();

    // Enable the "remove" button. This only shows once you have a duplicated section.
        $('#btnDel').attr('disabled', false);

    // Right now you can only add 8 sections, for a total of 9. Change '9' below to the max number of sections you want to allow.
        if (newNum == 9)
        $('#btnAdd').attr('disabled', true).prop('value', "You've reached the limit"); // value here updates the text in the 'add' button when the limit is reached 
    });

    $('#btnDel').click(function () {
    // Confirmation dialog box. Works on all desktop browsers and iPhone.
        if (confirm("Are you sure you wish to remove co-author above?. This cannot be undone."))
            {
                var num = $('.clonedInput').length;
                // how many "duplicatable" input fields we currently have
                $('#entry' + num).slideUp('slow', function () {$(this).remove();
                // if only one element remains, disable the "remove" button
                if (num -1 === 1)
                $('#btnDel').attr('disabled', true);
                // enable the "add" button
                $('#btnAdd').attr('disabled', false).prop('value', "Add co-Author");});
            }
        return false; // Removes the last section you added
    });
    // Enable the "add" button
    $('#btnAdd').attr('disabled', false);
    // Disable the "remove" button
    $('#btnDel').attr('disabled', true);
});