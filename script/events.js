
    // Add event button click event handler
    $('#add-event-btn').click(function() {
      var eventName = $('#event-name').val();
      var eventDate = $('#event-date').val();
      var eventType = $('#event-type').val();
  
      if (eventName != '' && eventDate != '' && eventType != '') {
        // Create new row for the event table
        var newRow = $('<tr></tr>');
  
        // Add event details to the row
        newRow.append('<td>' + eventName + '</td>');
        newRow.append('<td>' + eventDate + '</td>');
        newRow.append('<td>' + eventType + '</td>');
  
        // Add the row to the table
        $('#event-table tbody').append(newRow);
  
        // Clear form fields
        $('#event-name').val('');
        $('#event-date').val('');
        $('#event-type').val('');
      }
    });
