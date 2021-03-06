<?php
	
	// PUBLIC NETWORKS
	
	$lang	= array
	(
		'faq_page_title'	=> 'Frequently Asked Questions - #SITE_TITLE#',
		
		'faq_menu_title'	=> 'FAQ',
		
		
		'faqpb_cats_number'	=> 6,
		
		
		'faqpb_c1_title'		=> 'Getting Started',
		'faqpb_c1_posts_number'	=> 3,
		
		'faqpb_c1_p1_title'	=> 'What is #SITE_TITLE# ?',
		'faqpb_c1_p1_text'	=> '#SITE_TITLE# is a microblogging network. Microblogging is a popular method of communication on the Internet. Through microblogs, consumers exchange short messages and thereby share interesting content. In addition, #SITE_TITLE# texts, attaches links, videos, pictures and other files to your messages.',
		'faqpb_c1_p1_image'	=> '',
		
		'faqpb_c1_p2_title'	=> 'What are the first things I should do when I sign up ?',
		'faqpb_c1_p2_text'	=> "Perhaps the most important thing you should do as soon as you join your network is to fill out your profile so your colleagues can find you easily and you can communicate fully.\n\n- [url=#SITE_URL#settings/profile]Fill out the basic parameters of your profile[/url]: name, location, birthday, gender and tags.\n- [url=#SITE_URL#settings/avatar]Upload a photo to your profile[/url]\n- [url=#SITE_URL#settings/contacts]Complete contact details[/url]. You can complete your accounts just like other popular social networks like Facebook and Twitter.\n\nOnce you have properly completed your profile, you are ready to communicate with other people in the network. You can start to run reports and track messages to other users. You can view the already established groups to choose which ones to join or you can create new groups.",
		'faqpb_c1_p2_image'	=> 'static/images/faq/profile.jpg',
		
		'faqpb_c1_p3_title'	=> 'Who do I follow and how do I follow them ?',
		'faqpb_c1_p3_text'	=> "You can keep track of all that you consider to be interesting and useful, whether you know them or not. You can click on the tab [url=#SITE_URL#members]Members[/url] to see a list of all those who have already joined the network. Check there to see if you know anyone. This can be quite difficult if you work in a large company and the network has several thousand users. In this case you can use the search engine to find people with whom you work in a team because some of them may have already joined.\n\nYou can also view the [url=#SITE_URL#groups]Groups[/url] section to find people who are members of the groups you are a part of. So it is very likely to find people with interests similar to yours.\n\nAnother good way to find interesting people to follow is by going to your account and clicking on any of the tags that have already set. For example, if you are a designer and have the tag [b]design[/b] click it to find other people who also has that tag. So it’s very easy to find people with similar interests or positions in your community.",
		'faqpb_c1_p3_image'	=> 'static/images/faq/members.gif',
		
		
		'faqpb_c2_title'		=> 'Using the System',
		'faqpb_c2_posts_number'	=> 7,
		
		'faqpb_c2_p1_title'	=> 'What is a Dashboard ?',
		'faqpb_c2_p1_text'	=> "The [url=#SITE_URL#dashboard]Dashboard[/url] is where you find yourself immediately after login #SITE_TITLE#. This page shows you the Activity Feed from the day. Here you can see all the messages of consumer groups and external sources that you are following.\n\nThe [url=#SITE_URL#dashboard]Dashboard[/url] is divided into three columns and the important content is aggregated in the middle column. You can filter what you want to see in the middle column by selecting any topic in the left column. The right column contains helpful information, such as a list of users who were online last and currently popular tags in the entire network of #SITE_TITLE#.",
		'faqpb_c2_p1_image'	=> 'static/images/faq/dashboard.gif',
		
		'faqpb_c2_p2_title'	=> 'Dashboard filter "Activity Feed"',
		'faqpb_c2_p2_text'	=> 'The dashboard feed, [url=#SITE_URL#dashboard]Activity Feed[/url] is the first and most important filter tab on your dashboard. With it you can see the activity and posts of all of the people and groups you are following.',
		'faqpb_c2_p2_image'	=> 'static/images/faq/filters_feed.gif',
		
		'faqpb_c2_p3_title'	=> 'Dashboard filter "@Me"',
		'faqpb_c2_p3_text'	=> 'The filter tab, [url=#SITE_URL#dashboard/tab:@me]@Me[/url] is another important filter for your communication with other users in #SITE_TITLE#. In this filter you see all the posts that mention your name. These posts are all arranged in chronological order.',
		'faqpb_c2_p3_image'	=> 'static/images/faq/filters_atme.gif',
		
		'faqpb_c2_p4_title'	=> 'Dashboard filter "Commented"',
		'faqpb_c2_p4_text'	=> 'The filter [url=#SITE_URL#dashboard/tab:commented]Commented[/url] helps you navigate through the many discussions that occur around the posts in #SITE_TITLE#. This filter shows all of your posts that have at least one comment and they are arranged chronologically by date and time that the comments were added. If any of the posts have comments that you have not read, you will see a number in yellow next to the filter so you can easily keep track of all discussions.',
		'faqpb_c2_p4_image'	=> 'static/images/faq/filters_commented.gif',
		
		'faqpb_c2_p5_title'	=> 'Dashboard filter "Favorites"',
		'faqpb_c2_p5_text'	=> 'The filter [url=#SITE_URL#dashboard/tab:bookmarks]Favorites[/url] is extremely useful because it helps you quickly find any posts that you thought were important or interesting. Adding a post to the list of favorites is easy; simply click on the gray star on the right side of every post. In this filter you can only see favorite posts that you have selected.',
		'faqpb_c2_p5_image'	=> 'static/images/faq/filters_favorites.gif',
		
		'faqpb_c2_p6_title'	=> 'Dashboard filter "Everybody"',
		'faqpb_c2_p6_text'	=> 'The filter [url=#SITE_URL#dashboard/tab:everybody]Everybody[/url] shows you exactly all the public posts of all users in #SITE_TITLE#, whether you follow them or not. It is a useful way of finding new users and groups that might be interesting to you. Posts in this filter are arranged in chronological order.',
		'faqpb_c2_p6_image'	=> 'static/images/faq/filters_everybody.gif',
		
		'faqpb_c2_p7_title'	=> 'Filter "Private Messages"',
		'faqpb_c2_p7_text'	=> 'The filter tab, [url=#SITE_URL#privatemessages]Private Messages[/url] is a bit more special. It shows you the personal communication between you and other users. You can monitor only the communications between you and another user of a particular #SITE_TITLE#.',
		'faqpb_c2_p7_image'	=> 'static/images/faq/filters_private.gif',
		
		'faqpb_c3_title'		=> 'Posting',
		'faqpb_c3_posts_number'	=> 4,
		
		'faqpb_c3_p1_title'	=> 'Posting Status Updates',
		'faqpb_c3_p1_text'	=> 'To create a post in #SITE_TITLE#, simply click in the box and type the text you want to share with your friends, then click on the [b]Share[/b] buttton. Not only you can post text, you can also attach links, pictures, videos and files. You can choose to share something with your followers, any of your groups, or you can send a private message to a user. When you select a user, all you have to do is start typing the name of the person or their user alias and you will get pre search results.',
		//'faqpb_c3_p1_text'	=> 'To create a post in #SITE_TITLE#, simply click on the orange button in the left column of dashboard or shortcut [b]P[/b]. Not only can you post text, you can also attach links, pictures, videos and files. At the top of this form, you will see [b]share something with[/b]. You can choose to share something with your followers, any of your groups, or you can send a private message to a user. When you select a user, all you have to do is start typing the name of the person or their user alias and you will get pre search results.',
		'faqpb_c3_p1_image'	=> 'static/images/faq/postbtn.gif',
		
		'faqpb_c3_p2_title'	=> 'Reference to Users',
		'faqpb_c3_p2_text'	=> 'You can mention any specific person by adding an [b]@[/b] symbol before their name - for example, [b]@username[/b]. Thus, the users name becomes a link to their account. This will also send an e-mail notification to the user that you mention that user in your post. Also this post will appear in the section [b]@Me[/b] in their dashboard.',
		'faqpb_c3_p2_image'	=> 'static/images/faq/atsomebody.gif',
		
		'faqpb_c3_p3_title'	=> 'Private Messages',
		'faqpb_c3_p3_text'	=> 'You can send a private message to a user by their profile selecting the button [b]Send a message[/b] below the user avatar. This message will be sent only to the user, it will not be seen by any other users in the network. The user will receive it in the section [b]Private Messages[/b], and they will receive an e-mail notification.',
		'faqpb_c3_p3_image'	=> 'static/images/faq/sendpm.gif',
		
		'faqpb_c3_p4_title'	=> 'Tagging posts',
		'faqpb_c3_p4_text'	=> 'Tagging messages are used for marking keywords that are mentioned in order to be easily tracked and indexed. Tags are made merely by placing the symbol [b]#[/b] (hash) before each keyword. Thus, the keyword is a link that leads to all other posts that contains the same word.',
		'faqpb_c3_p4_image'	=> 'static/images/faq/tagging.gif',
		
		'faqpb_c4_title'		=> 'Following Users',
		'faqpb_c4_posts_number'	=> 2,
		
		'faqpb_c4_p1_title'	=> 'What does it mean to follow someone?',
		'faqpb_c4_p1_text'	=> "This means to subscribe to all of the posts from a particular user in #SITE_TITLE#. In your dashboard in the [url=#SITE_URL#dashboard]Activity Feed[/url], you will see all of the posts from the users that you follow.\n\nTo begin to follow a user is easy. Just go to their profile and click on the icon that has a + sign with a profile next to it at the top right. It will say [b]Follow username[/b]. If you later decide that you no longer want to get user updates from this user, go to his profile and click on the same icon that says [b]Stop following username[/b].\n\nMoreover users can monitor groups and tags.",
		'faqpb_c4_p1_image'	=> 'static/images/faq/follow.gif',
		
		'faqpb_c4_p2_title'	=> 'How can I see posts of all people who do not follow?',
		'faqpb_c4_p2_text'	=> "One of the filters in the left part of dashboard states [url=#SITE_URL#dashboard/tab:everybody]Everybody[/url]. When you click on this filter you will see all public posts of all users in #SITE_TITLE#, whether you follow them or not. It’s a useful way of finding new users and groups that might be interesting to you.",
		'faqpb_c4_p2_image'	=> 'static/images/faq/filters_everybody.gif',
		
		
		'faqpb_c5_title'		=> 'Using Tags',
		'faqpb_c5_posts_number'	=> 2,
		
		'faqpb_c5_p1_title'	=> 'How do I use tags ?',
		'faqpb_c5_p1_text'	=> "Tags are words in specific posts, which will automatically be converted into a link connected to search results for the word. To make a word a tag simply put a <b>#</b> before it. For example, if you type in a post <b>This is a tagging #example</b> then the system will automatically recognize that the word <b>#example</b> is the tag and converts it to a link to a search engine that will show you all the tags containing the word <b>example</b>. Thus it’s quite easy to organize your content and connect thematically common posts. Tags can also be monitored by the user, allowing it to maintain thematic channels on your network.",
		'faqpb_c5_p1_image'	=> 'static/images/faq/tagging.gif',
		
// 		'faqpb_c5_p2_title'	=> 'Tracking tags ',
// 		'faqpb_c5_p2_text'	=> "To begin to track tags, search for something then click the button [b]Save this search[/b] in the search results. This will add a link to this page in the right column called [b]Saved Searches[/b] on your dashboard. You can quickly and easily view all posts on this topic you chose.\n\nTo delete a page from your saved searches go back on the same page (by clicking the link on the dashboard) and click on the link [b]Remove from saved searches[/b].",
// 		'faqpb_c5_p2_image'	=> 'static/images/faq/savesearch.gif',
		
		'faqpb_c5_p2_title'	=> 'How to use tags to find interesting people in #SITE_TITLE# ?',
		'faqpb_c5_p2_text'	=> 'You can use tags to find interesting new users to follow. For example, if you are a specialist in finance, you can search for the tag [b]#finance[/b] and keep track of everything mentioned on the subject. Furthermore, it will display people who write about finance.',
		'faqpb_c5_p2_image'	=> '',
		
		
		'faqpb_c6_title'		=> 'Using Groups',
		'faqpb_c6_posts_number'	=> 4,
		
		'faqpb_c6_p1_title'	=> 'What are groups ?',
		'faqpb_c6_p1_text'	=> '[url=#SITE_URL#groups]Groups[/url] are distinct streams of various posts specific to topics. Each group consists of many members who can publish posts in the flow of the group. In #SITE_TITLE# each user can [url=#SITE_URL#groups/new]create new groups[/url] or join already created [url=#SITE_URL#groups]groups[/url].',
		'faqpb_c6_p1_image'	=> 'static/images/faq/group.gif',
		
		'faqpb_c6_p2_title'	=> 'How do I create a group ?',
		'faqpb_c6_p2_text'	=> "To create a new group, go to the tab [url=#SITE_URL#groups]Groups[/url] from the main navigation of your network butoncheto and click [url=#SITE_URL#groups/new]Create New Group[/url]. The page will open where you can select different options with which to create the group.\n\nThe default option is selected to create a public group. This means that every user on the network could join the group and posts messages and read messages of others.\n\nYou have the option to select the group private. In private groups may join by invitation only users and posts are not publicly available to all users of the network",
		'faqpb_c6_p2_image'	=> 'static/images/faq/newgroup.gif',
		
		'faqpb_c6_p3_title'	=> 'How do I join a group ?',
		'faqpb_c6_p3_text'	=> "To become a member of any public groups simply visit the group and click [b]Join [/b]. The group will give you rights to publish posts in the group and the avatars will appear in the tab [b]Groups[/b] on your profile and your avatar will appear in the tab [b]Members[/b] of the profile of the group.\n\nOnce you have joined a group you can find all the posts in its expandable list [b]Groups[/b] in the left menu of your dashboard.\n\nYou can find groups that interest you in the tab [url=#SITE_URL#groups]Groups[/url] in the main navigation of #SITE_TITLE#. If you cannot find suitable or interesting groups, you can [url=#SITE_URL#groups/new]create a new group[/url].",
		'faqpb_c6_p3_image'	=> 'static/images/faq/joingroup.gif',
		
		'faqpb_c6_p4_title'	=> 'What are private groups ?',
		'faqpb_c6_p4_text'	=> "The private groups are accessible only to users who have been invited, i.e. who have received an invitation. Posts in private groups are not publicly available to all users in #SITE_TITLE#.\n\nPrivate groups are appropriate for sharing confidential information and discussions that should not become public.\n\nTo create a private group, select the option [b]Private Group[/b] in the form to create a new group.\n\nTo convert an already created private group to a public one you have to be administrator of this group. Go to the tab [b]Group Settings[/b] and select [b]Private Group[/b]. During the process of conversion from public to private group all the users who are current members of the group will continue to be its members and will have access to the existing posts.",
		'faqpb_c6_p4_image'	=> '',
		
		'faq_title'			=> 'FAQ',
		'cant_understand'		=> 'Still don\'t understand something? You can allways ask our support.',
		'cont_us'			=> 'Contact Us',
	);
	
?>