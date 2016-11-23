<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Suppor Ticket Information</title>
</head>
<body>
<p>
    Thank you {{ ucfirst($user->name) }} for contacting our support team. A highly trained team of swat monkeys is now making its way to fix your reported bug. If they are successful then they shall be praised with heaps of bananas. If they fail...well what did you expect, we did just send monkeys! </p>
<p>
    The details of your ticket are shown below:
</p>

<p>Title: {{ $ticket->title }}</p>
<p>Priority: {{ $ticket->priority }}</p>
<p>Status: {{ $ticket->status }}</p>

<p>
    You can view the ticket at any time at {{ url('tickets/'. $ticket->ticket_id) }}
</p>

</body>
</html>