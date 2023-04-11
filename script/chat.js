$(function() {
    var $chatBubble = $('#chat-bubble');
    var $chatBox = $('#chat-box');
    var $chatBoxClose = $('#chat-box-close');
    var $chatMessages = $('#chat-messages');
    var $chatForm = $('#chat-form');
    var $chatInput = $('#chat-input');
    
    // Function to add a chat message
    function addChatMessage(msg) {
      $chatMessages.append('<p>' + msg + '</p>');
      $chatBox.scrollTop($chatBox[0].scrollHeight);
    }
    
    // Toggle chat box
    $chatBubble.on('click', function() {
      $chatBox.toggleClass('hidden show');
      $chatInput.focus();
    });
    
    // Close chat box
    $chatBoxClose.on('click', function() {
      $chatBox.addClass('hidden');
    });
    
    // Submit chat form
    $chatForm.on('submit', function(e) {
      e.preventDefault();
      var msg = $chatInput.val();
      if (msg.trim() === '') {
        return false;
      }
      addChatMessage(msg);
      $chatInput.val('');
    });
  });
  