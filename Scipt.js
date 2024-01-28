$(document).ready(function () {
    function sendMessage() {
        var message = $('#message').val().trim();
        if (message !== '') {
            $.post('sendMessage.php', { message: message }, function (response) {
                displayMessage(JSON.parse(response).message, true);
                $('#message').val('');
            });
        }
    }

    function displayMessage(message, isUser) {
        var cssClass = isUser ? 'user-message' : 'other-message';
        $('#chat-messages').append(`<div class="${cssClass} new-message">${message}</div>`).scrollTop($('#chat-messages')[0].scrollHeight);
    }

    function pollForMessages() {
        setInterval(function () {
            $.get('getMessages.php', function (response) {
                var messages = JSON.parse(response).messages;
                messages.forEach(function (message) {
                    displayMessage(message, false);
                });
            });
        }, 5000);
    }

    $('#user-input button').click(sendMessage);
    pollForMessages();
});