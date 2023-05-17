I started this bot because I have several facets I need covered for Book Club. They are as follows;

1. Voting
{
Voting works, as of today, in a rudimentary way. SUBMITTER submits TWO (2) BOOKs. Remaining USERS vote between the two books. USERS can only vote one or the other, it is a binary choice. Whichever BOOK receives the majority of votes gets added to bookLIST. I want this system automated so that two facets occur.
    A.) USERS can't accidentally vote twice.
    B.) SUBMITTERs don't have to format their books (as they currently have to individually submit each book)
If both of these facets are secured then everything moves more smoothly in the bookLIST generation.    
}
    
2. List Generation
{
After every USER has voted on every BOOK such that the bookLIST is built out, the bookLIST is then randomized. I also want this automated so no one wonders if the list is biased, and I also want it displayed in a clean, even, easy to read way.
}

3. Various trend/analytics tracking
{
This one is more ambivalent, but basically I want the bot to track any and all trends I give it criteria over. 
	What genres the book(s) we read favor
	how many pages we've read
	how many weeks it takes us to read books on average
	how many pages per week we read
	overall ratings (I'd also like the bot to post for users privately asking them what they rate the book, I know bots can post things that only certain users can see)
Likely to be more soon.
}

I'd also like to add a music playing functionality, but given the oddities of the various music bots all claiming discord's rules have changed, I may not go forward with this.

Going to use PHP and other codebases for the bot, but not attached to any one thing. Likely going to find an open source fork or some other starting point to then manipulate into doing what I need it to do.

I may test out some bot functionalities with Python first but it depends, there's a lot of documentation on PHP bots so I don't think the pulls will be an issue. I'm hoping I can scalp some goodreads data as well for the books, but that will be the last thing I try.

Working with Josh now in the other repo eventually. Getting confusing results with the coders.

I need to figure out how to properly port in certain elements.

Accessing code is easier than expected
