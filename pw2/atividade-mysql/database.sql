create database musica;
use musica;


/*select * from artista;
select biografia from artista where id=1;

select * from album where id_artista=1;
select * from album where id_artista=1 and id between 1 and 5;
select * from album where id_artista=1 and id=6;
select * from album where id_artista=1 and id between 7 and 13;

select * from usuario;

select * from noticia order by dt desc;*/


create table artista(
	id int primary key auto_increment,
    nome varchar(255),
    img varchar(255),
    formacao date,
    pais varchar(255),
    biografia text
);

insert into artista values
(null, 'Twenty One Pilots', 'twenty-one-pilots', '2009-01-01', 'Estados Unidos', 
'Twenty One Pilots (estilizado como twenty one pilots ou twenty øne piløts) 
é um duo americano originário de Columbus, Ohio. A banda foi formada em 2009 e 
é composta por Tyler Joseph e Josh Dun. Eles lançaram dois álbuns independentes, 
Twenty One Pilots, em 2009, e Regional at Best, em 2011, antes de assinarem com a 
gravadora Fueled by Ramen, em 2012. Seu primeiro álbum com esta gravadora, Vessel, 
foi lançado em 2013. O duo alcançou um grande sucesso com seu quarto álbum, 
Blurryface, lançado em 2015. O quinto álbum de estúdio do duo, Trench, 
foi lançado em 5 de outubro de 2018.');


create table album(
	id int primary key auto_increment,
    img varchar(255),
	titulo varchar(255),
	id_artista int,
    lancamento date,
    gravadora varchar(255),
    foreign key (id_artista) references artista(id)
);

insert into album values
(null, 'trench', 'Trench', 1, '2019-10-05', 'Fueled by Ramen'),
(null, 'blurryface', 'Blurryface', 1, '2015-05-17', 'Fueled by Ramen'),
(null, 'vessel', 'Vessel', 1, '2013-01-08', 'Fueled by Ramen'),
(null, 'regional-at-best', 'Regional at Best', 1, '2011-07-08', 'Independente'),
(null, 'twenty-one-pilots', 'Twenty One Pilots', 1, '2009-12-29', 'Independente');

insert into album values
(null, 'blurryface-live', 'Blurryface Live', 1, '2016-11-25', 'Fueled by Ramen');

insert into album values
(null, 'three-songs', 'Three Songs', 1, '2012-07-17', 'Fueled by Ramen'),
(null, 'migraine', 'Migraine', 1, '2013-06-14', 'Fueled by Ramen'),
(null, 'holding-on-to-you', 'Holding on to You ', 1, '2013-08-16', 'Fueled by Ramen'),
(null, 'quiet-is-violent', 'Quiet Is Violent', 1, '2014-08-01', 'Fueled by Ramen'),
(null, 'the-lc-lp', 'The LC LP', 1, '2015-04-18', 'Fueled by Ramen'),
(null, 'double-sided', 'Double Sided', 1, '2016-04-16', 'Fueled by Ramen'),
(null, 'topxmm', 'TOPxMM', 1, '2016-12-19', 'Fueled by Ramen');


create table musica(
	id int primary key auto_increment,
    id_album int,
    titulo varchar(255),
    numero int,
	url varchar(255),
    letra text,
	foreign key (id_album) references album(id)
);

insert into musica values
(null, 1, 'Jumpsuit', 1, 'UOUBW8bkjQ4', 
'I can’t believe how much I hate,<br>
Pressures of a new place roll my way,<br>
Jumpsuit, Jumpsuit cover me,<br>
Jumpsuit, Jumpsuit cover me.<br>
I crumble underneath the weight,<br>
Pressures of a new place roll my way,<br>
Jumpsuit, Jumpsuit cover me.<br>
Jumpsuit, Jumpsuit cover me.<br>
<br>
Spirits in my room, friend or foe?<br>
Felt it in my youth, feel it when I’m old,<br>
Jumpsuit, Jumpsuit cover me,<br>
Dusting off my Jumpsuit.<br>
<br>
I’ll be right there,<br>
But you’ll have to grab my throat and lift me in the air,<br>
If you need anyone,<br>
I’ll stop my plans,<br>
But you’ll have to tie me down and then break both my hands,<br>
If you need anyone.'),
(null, 1, 'Levitate', 2, 'uv_1AKKKJnk', 
'Oh I know how to levitate up off my feet,<br>
And ever since the seventh grade I learned to fire-breathe,<br>
And though I feed on things that fell,<br>
You can learn to levitate with just a little help,<br>
Learn to levitate with just a little help.<br>
<br>
Come down, come down,<br>
Cowards only come through when the hour’s late,<br>
And everyone’s asleep, mind you,<br>
Now, show up, show up,<br>
I know I shouldn’t say this,<br>
But a curse from you is all that I would need right now, man.<br>
Danger in the fabric of this thing I made,<br>
I probably shouldn’t show you but it’s way too late,<br>
My heart is with you hiding but my mind’s not made,<br>
Now they know it like we both knew for some time I’d say.<br>
They’re smirking at blood, they’re circling above,<br>
But this is not enough,<br>
Yeah this is not what you thought,<br>
No, no we are not just graffiti on a passing train,<br>
I got back what I once bought back,<br>
In that slot I won’t need to replace.<br>
This culture is a poacher of overexposure, not today,<br>
Don’t feed me to the vultures, I am a vulture who feeds on pain.<br>
Sleep in a well-lit room, don’t let the shadow through,<br>
And sever all I knew. Yeah sever all,<br>
I thought I could depend on, my weekends,<br>
On the freezing ground that I’m sleeping on,<br>
Please keep me from, please keep me down from the ledges,<br>
Better test it, wooden wedges under doorways,<br>
Keep your wooden wedges under doors.<br>
Chorus, verse, chorus, verse,<br>
Now here comes the eight. Wait, habits here too,<br>
You’re the worst, your structure compensates,<br>
But compensation feels a lot like rising up to dominate,<br>
By track two, at least they all know all they hear comes from a place.<br>
<br>
Oh I know how to levitate up off my feet,<br>
And ever since the seventh grade I learned to fire-breathe,<br>
And though I feed on things that fell,<br>
You can learn to levitate with just a little help, <br>
You can levitate with just a little help.'),
(null, 1, 'Morph', 3, 'OmL9TqTFIAc', 
'Can’t stop thinking about if and when I’ll die<br>
For now I see that "if" and "when" are truly different cries<br>
For "if" is purely panic and "when" is solemn sorrow<br>
And one invades today while the other spies tomorrow<br>
We’re surrounded and we’re hounded<br>
There’s no "above", or "under", or "around" it<br>
For "above" is blind belief and "under" is sword to sleeve<br>
And "around" is scientific miracle, let’s pick "above" and see<br>
For if and when we go "above", the question still remains<br>
Are we still in love and is it possible we feel the same?
And that’s when going "under" starts to take my wonder<br>
But until that time, I’ll try to sing this<br>
<br>
If I keep moving, they won’t know<br>
I’ll morph to someone else<br>
What they throw at me’s too slow<br>
I’ll morph to someone else<br>
I’m just a ghost<br>
I’ll morph to someone else<br>
Defense mechanism mode<br>
<br>
He’ll always try to stop me, that Nicholas Bourbaki<br>
He’s got no friends close but those who know him most know<br>
He goes by Nico, he told me I’m a copy<br>
When I’d hear him mock me that’s almost stopped me<br>
Well we’re surrounded and we’re hounded<br>
There’s no above or a secret door. what are we here for<br>
If not to run straight through all our tormentors?<br>
But until that time I’ll try and sing this...<br>
<br>
If I keep moving, they won’t know<br>
I’ll morph to someone else<br>
What they throw at me’s too slow<br>
I’ll morph to someone else<br>
I’m just a ghost<br>
I’ll morph to someone else<br>
Defense mechanism mode<br>
<br>
I’ll morph to someone else<br>
<br>
Lights they blink to me, transmitting things to me<br>
Ones and zeroes, ergo this symphony<br>
Anybody listening? Ones and zeroes<br>
Count to infinity, ones and zeroes<br>
<br>
I’m surrounded and I’m hounded<br>
There’s no "above", or "under", or "around" it<br>
For "above" is blind belief and "under" is sword to sleeve<br>
And "around" is scientific miracle, let’s pick "above" and see<br>
For if and when we go "above", the question still remains<br>
Are we still in love and is it possible we feel the same?<br>
And that’s when going "under" starts to take my wonder<br>
But until that time<br>
<br>
I’ll morph to someone else, I’m just a ghost<br>
<br>
If I keep moving, they won’t know<br>
I’ll morph to someone else<br>
What they throw at me’s too slow<br>
I’ll morph to someone else<br>
I’m just a ghost<br>
I’ll morph to someone else<br>
Defense mechanism mode<br>
If I keep moving, they won’t know<br>
Defense mechanism mode<br>
<br>
Not done, not done<br>
Not done, Josh Dun<br>
I’ll morph to someone else'),
(null, 1, 'My Blood', 4, '8mn-FFjIbo8', ''),
(null, 1, 'Chlorine', 5, 'eJnQBXmZ7Ek', ''),
(null, 1, 'Smithereens', 6, 'v8GwUos_Mtw', ''),
(null, 1, 'Neon Gravestones', 7, '5MeQ9rA2Ifg', ''),
(null, 1, 'The Hype', 8, 'frFdisA68Lo', ''),
(null, 1, 'Nico And The Niners', 9, 'hMAPyGoqQVw', ''),
(null, 1, 'Cut My Lip', 10, 'iRwXUzHpHIc', ''),
(null, 1, 'Bandito', 11, 'VQHTROo0S8E', ''),
(null, 1, 'Pet Cheetah', 12, 'VGMmSOsNAdc', ''),
(null, 1, 'Legend', 13, 'f3bzqzspXPI', ''),
(null, 1, 'Leave The City', 14, 'zDktApy8Sn0', '');

insert into musica values
(null, 2, 'Heavydirtysoul', 1, 'r_9Kf0D5BTs', 
'There’s an infestation in my mind’s imagination<br>
I hope that they choke on smoke ’cause I’m smoking them out the basement<br>
This is not rap, this is not hip-hop<br>
Just another attempt to make the voices stop<br>
Rapping to prove nothing, just writing to say something<br>
’Cause I wasn’t the only one who wasn’t rushing to sayin’ nothing<br>
This doesn’t mean I lost my dream<br>
It’s just right now I got a really crazy mind to clean.<br>
<br>
Gangsters don’t cry<br>
Therefore, therefore I’m<br>
Mr. Misty-eyed, therefore I’m<br>
<br>
Can you save, can you save my—<br>
Can you save my heavydirtysoul?<br>
Can you save, can you save my—<br>
Can you save my heavydirtysoul?<br>
For me, for me<br>
Can you save my heavydirtysoul?<br>
For me, for me<br>
Can you save my heavydirtysoul?<br>
<br><br>
Nah, I didn’t understand a thing you said<br><br>
If I didn’t know better I’d guess you’re all already dead<br><br>
Mindless zombies walking around with a limp and a hunch<br><br>
Saying stuff like, "You only live once."<br><br>
You’ve got one time to figure it out<br><br>
One time to twist and one time to shout<br><br>
One time to think and I say we start now<br><br>
Sing it with me if you know what I’m talking about.<br><br>
<br>
Gangsters don’t cry<br>
Therefore, therefore I’m<br>
Mr. Misty-eyed, therefore I’m<br>
<br>
Can you save, can you save my—<br>
Can you save my heavydirtysoul?<br>
Can you save, can you save my—<br>
Can you save my heavydirtysoul?<br>
For me, for me<br>
Can you save my heavydirtysoul?<br>
For me, for me<br>
Can you save my heavydirtysoul?<br>
<br>
Death inspires me like a dog inspires a rabbit.<br>
Death inspires me like a dog inspires a rabbit.<br>
<br>
Can you save, can you save my—
Can you save my heavydirtysoul?<br>
Can you save, can you save my—<br>
Can you save my heavydirtysoul?<br>
For me, for me<br>
Can you save my heavydirtysoul?<br>
For me, for me<br>
Can you save my heavydirtysoul?<br>
<br>
Can you save, can you save my—save my—<br>
Can you save my heavydirtysoul?<br>
Can you save, can you save my—save my—<br>
Can you save my heavydirtysoul?<br>'),
(null, 2, 'Stressed Out', 2, 'pXRviuL6vMY', 
'I wish I found some better sounds no one’s ever heard<br>
I wish I had a better voice that sang some better words<br>
I wish I found some chords in an order that is new<br>
I wish I didn’t have to rhyme every time I sang<br>
<br>
I was told when I get older all my fears would shrink<br>
But now I’m insecure and I care what people think.<br>
<br>
My name’s Blurryface and I care what you think.<br>
My name’s Blurryface and I care what you think.<br>
<br>
Wish we could turn back time, to the good ol’ days<br>
When our momma sang us to sleep but now we’re stressed out.<br>
Wish we could turn back time, to the good ol’ days<br>
When our momma sang us to sleep but now we’re stressed out.<br>
<br>
We’re stressed out.<br>
<br>
Sometimes a certain smell will take me back to when I was young<br>
How come I’m never able to identify where it’s coming from<br>
I’d make a candle out of it if I ever found it<br>
Try to sell it, never sell out of it, I’d probably only sell one<br>
<br>
It’d be to my brother, ’cause we have the same nose<br>
Same clothes homegrown a stone’s throw from a creek we used to roam<br>
But it would remind us of when nothing really mattered<br>
Out of student loans and treehouse homes we all would take the latter.<br>
<br>
My name’s Blurryface and I care what you think.<br>
My name’s Blurryface and I care what you think.<br>
<br>
Wish we could turn back time, to the good ol’ days<br>
When our momma sang us to sleep but now we’re stressed out.<br>
Wish we could turn back time, to the good ol’ days<br>
When our momma sang us to sleep but now we’re stressed out.<br>
<br>
We used to play pretend, give each other different names<br>
We would build a rocket ship and then we’d fly it far away<br>
Used to dream of outer space but now they’re laughing at our face<br>
Saying, ’Wake up, you need to make money.’<br>
<br>
We used to play pretend, give each other different names<br>
We would build a rocket ship and then we’d fly it far away<br>
Used to dream of outer space but now they’re laughing at our face<br>
Saying, ’Wake up, you need to make money.’<br>
<br>
Wish we could turn back time, to the good ol’ days<br>
When our momma sang us to sleep but now we’re stressed out.<br>
Wish we could turn back time, to the good ol’ days<br>
When our momma sang us to sleep but now we’re stressed out.<br>
<br>
Used to play pretend, used to play pretend, bunny<br>
We used to play pretend, wake up, you need the money<br>
Used to play pretend, used to play pretend, bunny<br>
We used to play pretend, wake up, you need the money<br>
We used to play pretend, give each other different names<br>
We would build a rocket ship and then we’d fly it far away<br>
Used to dream of outer space but now they’re laughing at our face<br>
Saying, ’Wake up, you need to make money.’<br>'),
(null, 2, 'Ride', 3, 'Pw-0pbY9JeU', 
'I just wanna stay in the sun where I find<br>
I know it’s hard sometimes<br>
Pieces of peace in the sun’s peace of mind<br>
I know it’s hard sometimes<br>
Yeah, I think about the end just way too much<br>
But it’s fun to fantasize<br>
On my enemies who wouldn’t wish who I was<br>
But it’s fun to fantasize<br>
<br>
Oh, oh, I’m falling, so I’m taking my time on my ride<br>
Oh, I’m falling, so I’m taking my time on my ride<br>
Taking my time on my ride<br>
<br>
’I’d die for you,’ that’s easy to say<br>
We have a list of people that we would take<br>
A bullet for them, a bullet for you<br>
A bullet for everybody in this room<br>
But I don’t seem to see many bullets coming through<br>
See many bullets coming through<br>
Metaphorically, I’m the man<br>
But literally, I don’t know what I’d do<br>
’I’d live for you,’ and that’s hard to do<br>
Even harder to say when you know it’s not true<br>
Even harder to write when you know that tonight<br>
There were people back home who tried talking to you<br>
But then you ignored them still<br>
All these questions they’re for real<br>
Like ’Who would you live for?’,<br>
’Who would you die for?’<br>
And ’Would you ever kill?’<br>
<br>
Oh, oh, I’m falling, so I’m taking my time on my ride<br>
Oh, I’m falling, so I’m taking my time on my ride<br>
Taking my time on my ride<br>
<br>
I’ve been thinking too much<br>
I’ve been thinking too much<br>
I’ve been thinking too much<br>
I’ve been thinking too much<br>
(help me)<br>
I’ve been thinking too much (I’ve been thinking too much)<br>
I’ve been thinking too much (Help me)<br>
I’ve been thinking too much (I’ve been thinking too much)<br>
I’ve been thinking too much<br>
<br>
Oh, oh, I’m falling, so I’m taking my time on my ride<br>
Oh, I’m falling, so I’m taking my time<br>
Taking my time on my ride<br>
<br>
Oh, oh, I’m falling, so I’m taking my time on my ride<br>
Oh, I’m falling, so I’m taking my time on my<br>
<br>
I’ve been thinking too much<br>
Help me<br>
I’ve been thinking too much<br>
Help me<br>
<br>
I’ve been thinking too much (I’ve been thinking too much)<br>
I’ve been thinking too much (help me)<br>
I’ve been thinking too much (I’ve been thinking too much)<br>
I’ve been thinking too much<br>
Help me<br>'),
(null, 2, 'Fairly Local', 4, 'HDI9inno86U', ''),
(null, 2, 'Tear In My Heart', 5, 'nky4me4NP70', ''),
(null, 2, 'Lane Boy', 6, 'ywvRgGAd2XI', ''),
(null, 2, 'The Judge', 7, 'PbP-aIe51Ek', ''),
(null, 2, 'Doubt', 8, 'MEiVnNNpJLA', ''),
(null, 2, 'Polarize', 9, 'MiPBQJq49xk', ''),
(null, 2, 'We Don’t Believe What’s On TV', 10, 'zZEumf7RowI', ''),
(null, 2, 'Message Man', 11, 'iE_54CU7Fxk', ''),
(null, 2, 'Hometown', 12, 'pJtlLzsDICo', ''),
(null, 2, 'Not Today', 13, 'yqem6k_3pZ8', ''),
(null, 2, 'Goner', 14, '3J5mE-J1WLk', '');

insert into musica values
(null, 3, 'Ode To Sleep', 1, '2OnO3UXFZdE', 
'I wake up fine and dandy but then by the time I find it handy<br>
To rip my heart apart and start planning my crash landing<br>
I go up, up, up, up, up to the ceiling<br>
Then I feel my soul start leaving, like an old man’s hair receding<br>
I’m pleading please, oh please on my knees repeatedly asking<br>
Why it’s got to be like this. Is this living free?<br>
I don’t want to be the one, be the one who has the sun’s blood on my hands<br>
I’ll tell the moon, take this weapon forged in darkness<br>
Some see a pen, I see a harpoon.<br>
<br>
I’ll stay awake<br>
’Cause the dark’s not taking prisoners tonight.<br>
<br><br>
Why am I not scared in the morning?<br>
I don’t hear those voices calling<br>
I must have kicked them out, I must have kicked them out<br>
I swear I heard demons yelling<br>
Those crazy words they were spelling<br>
They told me I was gone, they told me I was gone.<br>
<br>
But I’ll tell them<br>
Why won’t you let me go?<br>
Do I threaten all your plans?<br>
I’m insignificant.<br>
Please tell them you have no plans for me.<br>
I will set my soul on fire, what have I become?<br>
I’ll tell them.<br>
<br>
On the eve of a day that’s forgotten and fake<br>
And the trees they await and clouds anticipate<br>
The start of a day when we put on our face<br>
A mask that portrays that we don’t need grace<br>
On the eve of a day that is bigger than us<br>
But we open our eyes ’cause we’re told that we must<br>
And the trees wave their arms and the clouds try to plead<br>
Desperately yelling there’s something we need<br>
I’m not free, I asked forgiveness three times<br>
Same amount that I denied, I three-time mvp’ed this crime<br>
I’m afraid to tell you who I adore, won’t tell you who I’m singing towards<br>
Metaphorically I’m a whore, and that’s denial number four.<br>
<br>
I’ll stay awake<br>
’Cause the dark’s not taking prisoners tonight.<br>
<br>
Why am I not scared in the morning?<br>
I don’t hear those voices calling<br>
I must have kicked them out, I must have kicked them out<br>
I swear I heard demons yelling<br>
Those crazy words they were spelling<br>
They told me I was gone, they told me I was gone.<br>
<br>
But I’ll tell them<br>
Why won’t you let me go?<br>
Do I threaten all your plans?<br>
I’m insignificant<br>
Please tell them, you have no plans for me<br>
I will set my soul on fire, what have I become?<br>
I’ll tell them, you have no plans for me<br>
I will set my soul on fire<br>
What have I become?<br>
I’ll tell them<br>
I’ll tell them<br>
I’ll tell them<br>
I’ll tell them<br>
<br>
Please tell them, you have no plans for me<br>
I will set my soul on fire, what have I become?<br>
I’m sorry.<br>'),
(null, 3, 'Holding On To You', 2, 'ktBMxkLUIwY', 
'I’m taking over my body<br>
Back in control, no more shotty<br>
I bet a lot of me was lost<br>
“T”’s uncrossed and “I”’s undotted<br>
I fought it a lot and it seems a lot<br>
Like flesh is all I got<br>
Not any more, flesh out the door, SWAT!<br>
<br>
I must’ve forgot, you can’t trust me<br>
I’m open a moment and closed when you show it<br>
Before you know it I’m lost at sea<br>
And now that I write and think about it<br>
And the story unfolds<br>
You should take my life<br>
You should take my soul<br>
<br>
Ah ah ah<br>
Ah ah ah<br>
Ah ah ah<br>
Ah ah ah<br>
<br>
You are surrounding all my surroundings<br>
Sounding down the mountain range<br>
Of my left-side brain<br>
You are surrounding all my surroundings<br>
Twisting the kaleidoscope<br>
Behind both of my eyes<br>
<br>
Ah ah ah<br>
Ah ah ah (and I’ll be holding on to you)<br>
Ah ah ah<br>
Ah ah ah (and I’ll be holding on to you)<br>
<br>
Remember the moment<br>
You know exactly where you’re goin’<br>
’Cause the next moment before you know it<br>
Time is slowin’ and it’s frozen still<br>
And the windowsill looks really nice, right?<br>
You think twice about your life<br>
It probably happens at night, right?<br>
<br>
Fight it, take the pain, ignite it<br>
Tie a noose around your mind<br>
Loose enough to breath fine and tie it<br>
To a tree tell it, you belong to me, this ain’t a noose<br>
This is a leash and I have news for you<br>
You must obey me<br>

You are surrounding all my surroundings<br>
Sounding down the mountain range<br>
Of my left-side brain<br>
You are surrounding all my surroundings<br>
Twisting the kaleidoscope<br>
Behind both of my eyes<br>
<br>
Entertain my faith<br>
Entertain my faith<br>
Entertain my faith<br>
Entertain my faith<br>
Entertain my faith<br>
Entertain my faith<br>
Entertain my faith<br>
Entertain my faith<br>
Entertain my faith<br>
Entertain my faith<br>
<br>
Lean with it, rock with it<br>
When we gonna stop with it?<br>
Lyrics that mean nothing<br>
We were gifted with thought<br>
<br>
Is it time to move our feet<br>
To an introspective beat<br>
It ain’t the speakers that bump hearts<br>
It’s our hearts that make the beat<br>
<br>
Lean with it, rock with it<br>
When we gonna stop with it?<br>
Lyrics that mean nothing<br>
We were gifted with thought<br>
<br>
Is it time to move our feet<br>
To an introspective beat<br>
It ain’t the speakers that bump hearts<br>
It’s our hearts that make the beat<br>
<br>
Lean with it, rock with it<br>
When we gonna stop with it?<br>
Lyrics that mean nothing<br>
We were gifted with thought<br>
<br>
Is it time to move our feet<br>
To an introspective beat<br>
It ain’t the speakers that bump hearts<br>
It’s our hearts that make the beat<br>
<br>
Lean with it, rock with it<br>
When we gonna stop with it?<br>
Lyrics that mean nothing<br>
We were gifted with thought<br>
<br>
Is it time to move our feet<br>
To an introspective beat<br>
It ain’t the speakers that bump hearts<br>
It’s our hearts that make the beat<br>
<br>
Ah ah ah<br>
Ah ah ah (and I’ll be holding on to you)<br>
Ah ah ah (and I’ll be holding on to you)<br>
Ah ah ah (and I’ll be holding on to you)<br>
And I’ll be holding on to you<br>
<br>
Ah ah ah<br>
Ah ah ah (and I’ll be holding on to you)<br>
Ah ah ah (and I’ll be holding on to you)<br>
Ah ah ah (and I’ll be holding on to you)<br>
And I’ll be holding on to you<br>
And I’ll be holding on to you<br>'),
(null, 3, 'Migraine', 3, 'Bs92ejAGLdw', 
'Am I the only one I know<br>
Waging my wars behind my face and above my throat<br>
Shadows will scream that I’m alone<br>
<br>
I-I-I I’ve got a migraine<br>
And my pain will range from up, down, and sideways<br>
Thank God it’s Friday cause Fridays will always be better than Sundays<br>
’Cause Sundays are my suicide days<br>
<br>
I don’t know why they always seem so dismal<br>
Thunderstorms, clouds, snow and a slight drizzle<br>
Whether it’s the weather or the letters by my bed<br>
Sometimes death seems better than the migraine in my head<br>
Let it be said what the headache represents<br>
It’s me defending in suspense<br>
It’s me suspended in a defenseless test<br>
Being tested by a ruthless examinant<br>
That’s represented best by my depressing thoughts<br>
I do not have writer’s block my writer just hates the clock<br>
It will not let me sleep I guess I’ll sleep when I’m dead<br>
And sometimes death seems better than the migraine in my head<br>
<br>
Am I the only one I know<br>
Waging my wars behind my face and above my throat<br>
Shadows will scream that I’m alone<br>
But I know, we’ve made it this far, kid<br>
<br>
Yeah yeah yeah<br>
<br>
I am not as fine as I seem<br>
Pardon, me for yelling and telling you green gardens<br>
Are not what’s growing in my psyche, it’s a different me<br>
A difficult beast feasting on burnt down trees<br>
Freeze frame, please let me paint a mental picture portrait<br>
Something you won’t forget, it’s all about my forehead<br>
And how it is a door that hold’s back contents<br>
That makes Pandora’s box contents look non-violent<br>
Behind my eyelids are islands of violence<br>
My mind ship-wrecked this is the only land my mind could find<br>
I did not know it was such a violent island<br>
Full of tidal waves, suicidal crazed lions<br>
They’re trying to eat me, blood running down their chin<br>
And I know that I can fight, or I can let the lion win<br>
I begin to assemble what weapons I can find<br>
’Cause sometimes to stay alive you gotta kill your mind<br>
<br>
Am I the only one I know<br>
Waging my wars behind my face and above my throat<br>
Shadows will scream that I’m alone<br>
But I know, we’ve made it this far, kid<br>
<br>
And I will say that we should take a day to break away<br>
From all the pain our brain has made, the game is not played alone<br>
And I will say that we should take a moment and hold it<br>
And keep it frozen and know that life has a hopeful undertone<br>
<br>
And I will say that we should take a day to break away<br>
From all the pain our brain has made, the game is not played alone<br>
And I will say that we should take a moment and hold it<br>
And keep it frozen and know that life has a hopeful undertone<br>
<br>
Am I the only one I know<br>
Waging my wars behind my face and above my throat<br>
Shadows will scream that I’m alone<br>
But I know, we’ve made it this far, kid<br>
<br>
Made it this far<br>
Made it this f...<br>'),
(null, 3, 'House of Gold', 4, 'mDyxykpYeu8', ''),
(null, 3, 'Car Radio', 5, '92XVwY54h5k', ''),
(null, 3, 'Semi-Automatic', 6, 'pGb6KYJ3qpA', ''),
(null, 3, 'Screen', 7, 'NK7WWbXlkj4', ''),
(null, 3, 'The Run And Go', 8, 'wGbraQdkct8', ''),
(null, 3, 'Fake You Out', 9, 'KnthhE071-I', ''),
(null, 3, 'Guns for Hands', 10, 'Pmv8aQKO6k0', ''),
(null, 3, 'Trees', 11, 'szp9x1ZlZn4', ''),
(null, 3, 'Truce', 12, 'eCeBNwBUkcI', '');

insert into musica values
(null, 4, 'Guns for Hands', 1, 'Pmv8aQKO6k0', 
'I know what you think in the morning<br>
When the sun shines on the ground<br>
And shows what you have done<br>
It shows where your mind has gone<br>
And you swearing to your parents<br>
That it will never happen again<br>
I know, I know oh ow, what that means, I know oh oh oh ow<br>
<br>
That you all have guns<br>
And you never put the safety on<br>
And you all have plans,<br>
To take it, to take it, don’t take it, take it, take it<br>
<br>
I’m trying, I’m trying to sleep<br>
I’m trying, I’m trying to sleep<br>
But I can’t, but I can’t when you all have<br>
Guns for hands yeah<br>
<br>
I’m trying, I’m trying to sleep<br>
I’m trying, I’m trying to sleep<br>
But I can’t, but I can’t when you all have<br>
Guns for hands yeah<br>
<br>
Let’s take this a second at a time<br>
Let’s take this one song, this one rhyme<br>
Together, let’s breathe<br>
Together, to the beat<br>
But there’s hope out the window<br>
So that’s where we’ll go<br>
Let’s go outside and all join hands<br>
But until then you’ll never understand<br>
<br>
That you all have guns<br>
And you never put the safety on<br>
And you all have plans<br>
To take it, to take it, don’t take it, take it, take it<br>
<br>
I’m trying, I’m trying to sleep<br>
I’m trying, I’m trying to sleep<br>
But I can’t, but I can’t when you all have<br>
Guns for hands yeah<br>
<br>
We’ve turned our hands to guns, trade in our thumbs for ammunition<br>
I must forewarn you, of my disorder, or my condition<br>
’Cause when the sun sets, it upsets what’s left of my invested interest<br>
Interested in putting my fingers to my head<br>
The solution is, I see a whole room of these mutant kids<br>
Fused at the wrist, I simply tell them they should shoot at this<br>
Simply suggest my chest and this confused music, it’s<br>
Obviously best for them to turn their guns to a fist<br>
<br>
I’m trying, I’m trying to sleep<br>
I’m trying, I’m trying to sleep<br>
But I can’t, but I can’t when you all have<br>
Guns for hands<br>
<br>
I’m trying, I’m trying to sleep<br>
I’m trying, I’m trying to sleep<br>
But I can’t, but I can’t when you all have<br>
Guns for hands<br>'),
(null, 4, 'Holding On To You', 2, 'ktBMxkLUIwY', 
'I’m taking over my body<br>
Back in control, no more shotty<br>
I bet a lot of me was lost<br>
“T”’s uncrossed and “I”’s undotted<br>
I fought it a lot and it seems a lot<br>
Like flesh is all I got<br>
Not any more, flesh out the door, SWAT!<br>
<br>
I must’ve forgot, you can’t trust me<br>
I’m open a moment and closed when you show it<br>
Before you know it I’m lost at sea<br>
And now that I write and think about it<br>
And the story unfolds<br>
You should take my life<br>
You should take my soul<br>
<br>
Ah ah ah<br>
Ah ah ah<br>
Ah ah ah<br>
Ah ah ah<br>
<br>
You are surrounding all my surroundings<br>
Sounding down the mountain range<br>
Of my left-side brain<br>
You are surrounding all my surroundings<br>
Twisting the kaleidoscope<br>
Behind both of my eyes<br>
<br>
Ah ah ah<br>
Ah ah ah (and I’ll be holding on to you)<br>
Ah ah ah<br>
Ah ah ah (and I’ll be holding on to you)<br>
<br>
Remember the moment<br>
You know exactly where you’re goin’<br>
’Cause the next moment before you know it<br>
Time is slowin’ and it’s frozen still<br>
And the windowsill looks really nice, right?<br>
You think twice about your life<br>
It probably happens at night, right?<br>
<br>
Fight it, take the pain, ignite it<br>
Tie a noose around your mind<br>
Loose enough to breath fine and tie it<br>
To a tree tell it, you belong to me, this ain’t a noose<br>
This is a leash and I have news for you<br>
You must obey me<br>

You are surrounding all my surroundings<br>
Sounding down the mountain range<br>
Of my left-side brain<br>
You are surrounding all my surroundings<br>
Twisting the kaleidoscope<br>
Behind both of my eyes<br>
<br>
Entertain my faith<br>
Entertain my faith<br>
Entertain my faith<br>
Entertain my faith<br>
Entertain my faith<br>
Entertain my faith<br>
Entertain my faith<br>
Entertain my faith<br>
Entertain my faith<br>
Entertain my faith<br>
<br>
Lean with it, rock with it<br>
When we gonna stop with it?<br>
Lyrics that mean nothing<br>
We were gifted with thought<br>
<br>
Is it time to move our feet<br>
To an introspective beat<br>
It ain’t the speakers that bump hearts<br>
It’s our hearts that make the beat<br>
<br>
Lean with it, rock with it<br>
When we gonna stop with it?<br>
Lyrics that mean nothing<br>
We were gifted with thought<br>
<br>
Is it time to move our feet<br>
To an introspective beat<br>
It ain’t the speakers that bump hearts<br>
It’s our hearts that make the beat<br>
<br>
Lean with it, rock with it<br>
When we gonna stop with it?<br>
Lyrics that mean nothing<br>
We were gifted with thought<br>
<br>
Is it time to move our feet<br>
To an introspective beat<br>
It ain’t the speakers that bump hearts<br>
It’s our hearts that make the beat<br>
<br>
Lean with it, rock with it<br>
When we gonna stop with it?<br>
Lyrics that mean nothing<br>
We were gifted with thought<br>
<br>
Is it time to move our feet<br>
To an introspective beat<br>
It ain’t the speakers that bump hearts<br>
It’s our hearts that make the beat<br>
<br>
Ah ah ah<br>
Ah ah ah (and I’ll be holding on to you)<br>
Ah ah ah (and I’ll be holding on to you)<br>
Ah ah ah (and I’ll be holding on to you)<br>
And I’ll be holding on to you<br>
<br>
Ah ah ah<br>
Ah ah ah (and I’ll be holding on to you)<br>
Ah ah ah (and I’ll be holding on to you)<br>
Ah ah ah (and I’ll be holding on to you)<br>
And I’ll be holding on to you<br>
And I’ll be holding on to you<br>'),
(null, 4, 'Ode To Sleep', 3, '2OnO3UXFZdE', 
'I wake up fine and dandy but then by the time I find it handy<br>
To rip my heart apart and start planning my crash landing<br>
I go up, up, up, up, up to the ceiling<br>
Then I feel my soul start leaving, like an old man’s hair receding<br>
I’m pleading please, oh please on my knees repeatedly asking<br>
Why it’s got to be like this. Is this living free?<br>
I don’t want to be the one, be the one who has the sun’s blood on my hands<br>
I’ll tell the moon, take this weapon forged in darkness<br>
Some see a pen, I see a harpoon.<br>
<br>
I’ll stay awake<br>
’Cause the dark’s not taking prisoners tonight.<br>
<br>
Why am I not scared in the morning?<br>
I don’t hear those voices calling<br>
I must have kicked them out, I must have kicked them out<br>
I swear I heard demons yelling<br>
Those crazy words they were spelling<br>
They told me I was gone, they told me I was gone.<br>
<br>
But I’ll tell them<br>
Why won’t you let me go?<br>
Do I threaten all your plans?<br>
I’m insignificant.<br>
Please tell them you have no plans for me.<br>
I will set my soul on fire, what have I become?<br>
I’ll tell them.<br>
<br>
On the eve of a day that’s forgotten and fake<br>
And the trees they await and clouds anticipate<br>
The start of a day when we put on our face<br>
A mask that portrays that we don’t need grace<br>
On the eve of a day that is bigger than us<br>
But we open our eyes ’cause we’re told that we must<br>
And the trees wave their arms and the clouds try to plead<br>
Desperately yelling there’s something we need<br>
I’m not free, I asked forgiveness three times<br>
Same amount that I denied, I three-time mvp’ed this crime<br>
I’m afraid to tell you who I adore, won’t tell you who I’m singing towards<br>
Metaphorically I’m a whore, and that’s denial number four.<br>
<br>
I’ll stay awake<br>
’Cause the dark’s not taking prisoners tonight.<br>
<br>
Why am I not scared in the morning?<br>
I don’t hear those voices calling<br>
I must have kicked them out, I must have kicked them out<br>
I swear I heard demons yelling<br>
Those crazy words they were spelling<br>
They told me I was gone, they told me I was gone.<br>
<br>
But I’ll tell them<br>
Why won’t you let me go?<br>
Do I threaten all your plans?<br>
I’m insignificant<br>
Please tell them, you have no plans for me<br>
I will set my soul on fire, what have I become?<br>
I’ll tell them, you have no plans for me<br>
I will set my soul on fire<br>
What have I become?<br>
I’ll tell them<br>
I’ll tell them<br>
I’ll tell them<br>
I’ll tell them<br>
<br>
Please tell them, you have no plans for me<br>
I will set my soul on fire, what have I become?<br>
I’m sorry.<br>'),
(null, 4, 'Slowtown', 4, '3_1Vv0Kybeo', ''),
(null, 4, 'Car Radio', 5, 'fjclm1kCj9E', ''),
(null, 4, 'Forest', 6, 'IFhlQWWWO20', ''),
(null, 4, 'Glowing Eyes', 7, 'dnCYRa3MBiY', ''),
(null, 4, 'Kitchen Sink', 8, '_gcNBMMQIMk', ''),
(null, 4, 'Anathema', 9, 't-6OhpBzyiU', ''),
(null, 4, 'Lovely', 10, '2YGCoNfuRn4', ''),
(null, 4, 'Ruby', 11, 'VtjggQ7l-nk', ''),
(null, 4, 'Trees', 12, 'szp9x1ZlZn4', ''),
(null, 4, 'Be Concerned', 13, 's_UBcf_VKao', ''),
(null, 4, 'Clear', 14, 'obm6fdLOaXM', '');

insert into musica values
(null, 5, 'Implicit Demand for Proof', 1, 'hfrXmKg5xKw', 
'I know you’re not a liar<br>
And I know you could set fire<br>
This day<br>
Go ahead and make me look away<br>
Strike me down<br>
I am calling your lightning<br>
Down from your dark hiding place<br>
Go ahead and show me<br>
Your face<br>
<br>
Rain down<br>
And destroy me<br>
Rain down<br>
And destroy me<br>
Rain down<br>
<br>
I mean no disrespect<br>
I am simply very perplexed<br>
By your ways<br>
Why won’t you let us<br>
Use your name?<br>
<br>
Rain down<br>
And destroy me<br>
Rain down<br>
And destroy me<br>
Rain down<br>
And destroy me<br>
Rain down<br>
And destroy me<br>
<br>
Rain down<br>
Rain down<br>
Down<br>'),
(null, 5, 'Fall Away', 2, 'ypMACz5ePNg', 
'I don’t wanna fall, fall away<br>
I don’t wanna fall, fall away<br>
I’ll keep the lights on in this place<br>
’Cause I don’t wanna fall, fall away<br>
<br>
I don’t wanna fall, fall away<br>
I don’t wanna fall, fall away<br>
I’ll keep the lights on in this place<br>
’Cause I don’t wanna fall, fall away<br>
<br>
I disguise<br>
And I will lie<br>
And I will take my precious time<br>
As the days melt away<br>
As I stand in line<br>
And I die as I wait as I wait on my crime<br>
And I’ll try to delay what you make of my life<br>
But I don’t want your way,<br>
I want mine<br>
I’m dying and I’m trying<br>
But believe me I’m fine<br>
But I’m lying,<br>
I’m so very far from fine<br>
<br>
And I, I can feel the pull begin<br>
Feel my conscience wearing thin<br>
And my skin<br>
It will start to break up and fall apart<br>
<br>
I don’t wanna fall, fall away<br>
I don’t wanna fall, fall away<br>
I’ll keep the lights on in this place<br>
’Cause I don’t wanna fall, fall away<br>
<br>
Every time I feel selfish ambition<br>
Is taking my vision<br>
And my crime is my sentence<br>
Repentance is taking commission<br>
It’s taking a toll<br>
On my soul<br>
I’m screaming submission and,<br>
I don’t know if I am dying or living<br>
’Cause I will save face<br>
For name’s sake<br>
Abuse grace<br>
Take aim to obtain a new name<br>
And a newer place<br>
But my name is lame<br>
I can’t walk and I ain’t the same<br>
And my name became<br>
A new destiny to the grave<br>
<br>
And I, I can feel the pull begin<br>
Feel my conscience wearing thin<br>
And my skin,<br>
It will start to break up and fall apart<br>
<br>
I don’t wanna fall, fall away<br>
I don’t wanna fall, fall away<br>
I’ll keep the lights on in this place<br>
’Cause I don’t wanna fall, fall away<br>'),
(null, 5, 'The Pantaloon', 3, 'TBkL09zz24w', 
'Your grandpa died<br>
When you were nine<br>
They said he had lost his mind<br>
You have learned<br>
Way too soon<br>
You should never trust the Pantaloon<br>
<br>
Now it’s your turn<br>
To be alone<br>
Find a wife and build yourself a home<br>
You have learned<br>
Way too soon<br>
That your dad is now the Pantaloon<br>
<br>
You are tired<br>
You are hurt<br>
A moth ate through<br>
Your favorite shirt<br>
And all your friends<br>
Fertilize<br>
The ground you walk<br>
Lose your mind<br>
<br>
He’s seen too many stare downs<br>
Between the sun and the moon<br>
In the morning air<br>
How he used to hustle all the people<br>
Walking through the fairgrounds<br>
He’s been around so long<br>
He’s changed his meaning of a chair now<br>
Because a chair now,<br>
Is like a tiny island in the sea of all the people<br>
Who glide across the very surface<br>
That made his bones feeble<br>
The end can’t come soon enough<br>
But is it too soon?<br>
Either way he can’t deny<br>
He is a Pantaloon<br>
<br>
You are tired<br>
You are hurt<br>
A moth ate through<br>
Your favorite shirt<br>
And all your friends
Fertilize<br>
The ground you walk<br>
Lose your mind<br>
<br>
You like to sleep alone<br>
It’s colder than you know<br>
’Cause your skin is so used to colder bones<br>
It’s warmer in the morning<br>
Than what it is at night<br>
Your bones are held together<br>
By your nightmares and your frights<br>
<br>
You are tired<br>
You are hurt<br>
A moth ate through<br>
Your favorite shirt<br>
And all your friends<br>
They fertilize<br>
The ground you walk<br>
So lose your mind<br>
<br>
You are tired<br>
You are hurt<br>
A moth ate through<br>
Your favorite shirt<br>
And all your friends<br>
They fertilize<br>
The ground you walk<br>
So lose your mind<br>'),
(null, 5, 'Addict With A Pen', 4, '0PqpRnpE4yg', ''),
(null, 5, 'Friend, Please', 5, '4-Q_0iKNnVM', ''),
(null, 5, 'March To The Sea', 6, 'VE6eRwMFx8E', ''),
(null, 5, 'Johnny Boy', 7, 'Zbx6yRzx_50', ''),
(null, 5, 'Oh, Ms. Believer', 8, 'IpiaYAGjXhU', ''),
(null, 5, 'Air Catcher', 9, '1hPHM6TuQSA', ''),
(null, 5, 'Trapdoor', 10, 'C3aY6wcMJnw', ''),
(null, 5, 'A Car, A Torch, A Death', 11, 'OLKlFw2ab1M', ''),
(null, 5, 'Taxi Cab', 12, 'M2wB0skdJ5o', ''),
(null, 5, 'Before You Start Your Day', 13, '0KIyt6mwmG8', ''),
(null, 5, 'Isle of Flightless Birds', 14, 'NXEcli7b04Y', '');

insert into musica values
(null, 6, 'Heavydirtysoul', 1, '', ''),
(null, 6, 'Stressed Out', 2, '', ''),
(null, 6, 'Guns For Hands', 3, '', ''),
(null, 6, 'Migraine', 4, '', ''),
(null, 6, 'Polarize', 5, '', ''),
(null, 6, 'We Don’t Believe What’s On TV', 6, '', ''),
(null, 6, 'The Judge', 7, '', ''),
(null, 6, 'Lane Boy', 8, '', ''),
(null, 6, 'Medley Mashup', 9, '', ''),
(null, 6, 'Doubt', 10, '', ''),
(null, 6, 'Message Man', 11, '', ''),
(null, 6, 'Holding on to You', 12, '', ''),
(null, 6, 'Ride', 13, '', ''),
(null, 6, 'The Run And Go', 14, '', ''),
(null, 6, 'Tear In My Heart', 15, '', ''),
(null, 6, 'Car Radio', 16, '', ''),
(null, 6, 'Goner', 17, '', ''),
(null, 6, 'Trees', 18, '', '');

insert into musica values
(null, 7, 'Guns for Hands', 1, '', ''),
(null, 7, 'Migraine', 2, '', ''),
(null, 7, 'Ode To Sleep', 3, '', '');

insert into musica values
(null, 8, 'Migraine', 1, '', ''),
(null, 8, 'Forest', 2, '', ''),
(null, 8, 'Ode To Sleep', 3, '', ''),
(null, 8, 'Guns for Hands', 4, '', ''),
(null, 8, 'Migraine (Live from the LC Pavilion)', 5, '', '');

insert into musica values
(null, 9, 'Holding On To You', 1, '', ''),
(null, 9, 'Holding On To You (Live at the LC Pavilion', 2, '', ''),
(null, 9, 'Can’t Help Falling In Love', 3, '', ''),
(null, 9, 'The Run And Go', 4, '', '');

insert into musica values
(null, 10, 'Car Radio (Live at the Newport Music Hall)', 1, '', ''),
(null, 10, 'Holding On To You (Live at the Newport Music Hall)', 2, '', ''),
(null, 10, 'Guns for Hands (Live from SXSW)', 3, '', ''),
(null, 10, 'House of Gold (Denzel Park Remix)', 4, '', ''),
(null, 10, 'Car Radio (Great Good Fine OK Remix)', 5, '', ''),
(null, 10, 'Guns for Hands (Dzeko & Torres Remix)', 6, '', '');

insert into musica values
(null, 11, 'Fall Away (Live at the LC Pavilion)', 1, '', ''),
(null, 11, 'Forest (Live at the LC Pavilion)', 2, '', ''),
(null, 11, 'Ode To Sleep (Live at the LC Pavilion)', 3, '', '');

insert into musica values
(null, 12, 'A Few Older Ones (Medley)', 1, '', ''),
(null, 12, 'Doubt', 2, '', '');

insert into musica values
(null, 13, 'Heathens [featuring MUTEMATH]', 1, '', ''),
(null, 13, 'Heavydirtysoul [featuring MUTEMATH]', 2, '', ''),
(null, 13, 'Ride [featuring MUTEMATH]', 3, '', ''),
(null, 13, 'Tear In My Heart [featuring MUTEMATH]', 4, '', ''),
(null, 13, 'Lane Boy [featuring MUTEMATH]', 5, '', '');


create table usuario(
	id int primary key auto_increment,
    data_cadastro datetime,
    nome varchar(15),    
    email varchar(100),
    senha varchar(20)
);

insert into usuario values
(null, now(), 'joao', 'joao@gmail.com', 'joao123'),
(null, now(), 'maria', 'maria@gmail.com', 'maria123'),
(null, now(), 'carlos', 'carlos@gmail.com', 'carlos123');


create table noticia(
	id int primary key auto_increment,
    dt date,
    img varchar(255),
    titulo varchar(255),
    subtitulo text,
    conteudo text,
    link varchar(255)
);

insert into noticia values (
null, '2019-05-09', '59725732_10155842852786148_5459502508139347968_n', 
'Twenty One Pilots toca “Legend” e “The Hype” ao vivo pela primeira vez',
'Duo incluiu canções no setlist durante sua passagem pelo México',
'O Twenty One Pilots estreou duas canções de Trench (2018) ao vivo durante sua passagem pelo México.<br><br>
Em um show privado e acústico no último sábado (04), na Cidade do México, 
o duo composto por Tyler Joseph e Josh Dun apresentou “Legend”,
uma das preferidas dos fãs.<br><br>
A canção foi tocada novamente dois dias depois, em Guadalajara.<br><br>
Outra canção que também ganhou versão ao vivo pela primeira vez foi “The Hype”, no dia 1° de Maio, em Monterrey.',
'http://www.tenhomaisdiscosqueamigos.com/2019/05/09/twenty-one-pilots-legend-hype/'
);

insert into noticia values(
null, '2019-04-08', 'Twenty-One-Pilots-no-Lollapalooza-Brasil', 
'Com ajuda de uma verdadeira multidão, Twenty One Pilots faz show incrível no Lollapalooza',
'A dupla americana não poupou energia para fazer um show digno de headliner',
'Quando o Twenty One Pilots tocou no Lollapalooza Brasil pela primeira vez em 2016, 
eles foram colocados para se apresentar em um horário no meio da tarde — 
algo comum para bandas internacionais que estão apenas começando a conquistar o sucesso.<br><br>
Agora, três anos depois, eles voltaram para tocar no penúltimo horário da última noite do evento. 
O alcance do Twenty One Pilots aumentou drasticamente neste meio tempo — 
e a presença de palco da dupla cresceu na mesma proporção.<br><br>
Com direito a efeitos pirotécnicos e fantasias, 
Tyler Joseph e Josh Dun subiram ao palco mandando ver em “Jumpsuit”, 
o carro-chefe de seu mais recente álbum de estúdio, Trench, 
lançado ano passado. Mas apesar da dupla ter acabado de subir ao palco, 
a primeira cena que chamou a atenção do show foi a imediata reação do público: 
o som da plateia estava mais alto do que o microfone do próprio cantor, 
ecoando todas as letras da faixa.<br><br>
E essa energia não parou por um segundo. 
Em meio a hits como “Heathens”, “Ride” ou “Stressed Out”, 
a troca de coros entre Tyler e a multidão do Lollapalooza 
foi algo mágico de se observar — sinalizando que, talvez, 
a banda merecesse um horário ainda melhor na programação do festival.<br><br>
Entre músicas, Tyler e Josh se dirigiram ao público com palavras carinhosas, 
arriscando um português e se jogando no meio do povo — em determinado momento, 
o baterista chegou a fazer um solo utilizando de uma “bateria móvel” 
que estava sendo sustentada pelo próprio público.<br><br>
Foram diversos momentos dinâmicos como esse que contribuíram 
para que o show não ficasse desinteressante em nenhum ponto. 
Sempre havia alguma “firula” ou interação que embalasse o 
repertório e deixasse o público entretido.<br><br>
No final das contas, o Twenty One Pilots foi uma das melhores escolhas para o evento.<br><br>
Todos os aspectos foram impecáveis — escolha de repertório, produção, dinâmica com o público,
mostrando que a dupla pode até ser jovem, mas já sabe dar um espetáculo como veteranos.',
'http://www.tenhomaisdiscosqueamigos.com/2019/04/08/twenty-one-pilots-faz-show-incrivel-no-lollapalooza/'
);

insert into noticia values(
null, '2019-03-13', 'x79273381_SCShow-do-duo-Twenty-One-Pilots-em-Londres',
'Tyler Joseph revela já estar compondo novo disco do Twenty One Pilots',
'Segundo o vocalista, a banda precisa concluir a temática iniciada em Trench',
'Boas notícias para os fãs de Twenty One Pilots: parece que a banda não demorará muito para 
lançar o sucessor de Trench, seu mais recente disco de estúdio. Em uma nova entrevista para a NME, 
o cantor Tyler Joseph confirmou já estar compondo músicas para o próximo álbum da banda, revelando 
que a temática de Trench ainda não foi concluída.<br><br>
“Definitivamente existe uma conclusão. Uma história. Eu acho que fomos bem específicos com o motivo 
do disco terminar com [a música] “Leave The City” e a canção em si é um tipo de gancho. 
Tipo, o objetivo foi deixar em aberto para o futuro e seria bobagem não concluir o que já começamos. 
Em seguida, ele falou que está trabalhando nas músicas novas em meio a turnê do grupo. 
É difícil porque estamos fazendo isso durante a turnê, mas eu acordei há duas noites -- 
isso não acontece com frequência, eu sei que soa muito dramático, mas eu acordei com uma 
melodia na cabeça e peguei meu celular e gravei. Então voltei a dormir e, quando eu acordei, 
eu lembrei que tinha feito isso e abri a gravação para ouvir. Na minha mente, 
eu tinha sido abençoado com essa visão que tive num sonho que me empolgou demais, 
[mas] quando eu fui ouvir a gravação eu pensei “Ok, não é algo tão bom... 
Mas peraí, se eu começar a alterar esses acordes aqui e ali...” 
Então é bem bom estar em turnê e me sentir influenciado para compor porque 
muitas coisas malucas podem acontecer e você nunca dorme muito bem durante a turnê.”',
'https://diversao.r7.com/pop/musica/tenho-mais-discos-que-amigos/tyler-joseph-revela-ja-estar-compondo-novo-disco-do-twenty-one-pilots-13032019'
);

insert into noticia values(
null, '2019-03-29', 'lolla2016_g1_twentyone_pilots_0746',
'Twenty One Pilots não sabe se faz rock e não se importa com isso, diz baterista antes do Lollapalooza',
'Duo que surpreendeu em 2016 volta ainda mais forte. Josh Dun diz que confusão de gêneros é “meio de propósito" 
e revela playlist de bastidores: rap para aquecer e Sigur Rós para relaxar.',
'O Twenty One Pilots tem gênero fluido. O anúncio se parece com o de outra atração do Lollapalooza, Sam Smith, 
que tem gênero não binário: não é homem, nem mulher. Mas no caso do grupo, a rejeição de rótulos é musical. 
Eles não se encaixam no binarismo “é rock ou é rap”.<br><br>
“Não sei se o que tocamos é rock, e isso não importa”, disse o baterista Josh Dun em entrevista ao G1 antes do 
show da banda no Lollapalooza SP. Veja a programação completa.<br><br>
Tem gente que chama de rap-rock. Há quem diga que é rap alternativo. Outros acham que o alternativo é o rock. 
Tem reggae, synthpop, um tiquinho de emo... Não dá pra explicar, apenas sentir hits como "“Stressed out", 
com Josh fazendo no braço uma batida reta de hip hop.<br><br>
Na entrevista, ele mostra convicção no “gênero fluido”. Antes do show, ele ouve o rap de Joey Badass 
e o pop punk do Offspring para aquecer. No fim, o indie plácido a Sigur Rós para relaxar.<br><br>
Aliás, se você acha que Twenty One Pilots é bagunça, repare na seriedade do bastidor, que inclui reunião 
de lições aprendidas. A banda não quer se definir, mas quer aprender. Foram uma surpresa no Lolla SP 2016 
e voltam ainda maiores, com o disco “Trench” (2018). Leia a conversa:<br><br>
<strong>G1 - O tamanho da plateia de vocês no Lollapalooza 2016 foi uma surpresa para muita gente. 
O que você lembra daquele dia?</strong><br>
<strong>Josh Dun</strong> - Cara, foi uma surpresa para a gente também. Quando a gente vai para um lugar pela primeira vez, 
não sabemos se as pessoas vão nos conhecer. A gente não sabia aí se iam cantar as músicas, e foi incrível. 
E agora estamos ansiosos para voltar.<br><br>
<strong>G1 - A performance de vocês no palco é forte. O que você faz geralmente na meia hora antes e depois de um show?</strong><br>
<strong>Josh Dun</strong> - Foi mudando ao longo dos anos. Eu costumava só esperar para tocar. Mas hoje eu me junto com um amigo, que está na nossa equipe e é baterista, e a gente passa exercícios de bateria para focar no show, e tentar soltar o corpo. E logo antes eu faço um exercício de aquecimento: alongamento, um pouco de cardio para dar uma suada.<br>
E depois do show a gente sempre se junta para dissecar a apresentação e refletir sobre ela. É uma coisa legal. Falamos sobre as coisas que precisam melhorar, que deram errados e podem ser consertadas. Fazemos isso por 10 a 20 minutos depois de cada show.<br>
Depois disso eu desligo as luzes e fico sozinho comigo mesmo, e ouço músicas para relaxar. Ainda mais agora, que a gente toca para muita gente, é importante.<br><br>
<strong>G1 - Que músicas você ouve nesse momento?</strong><br>
<strong>Josh Dun</strong> - Eu criei uma playlist no Spotify chamada “pós-show”. É ela que eu escuto. É basicamente Sigur Rós, que é suave e muito legal. Nem sei se essas listas estão públicas...<br>
<em>(O G1 encontrou o perfil de Josh e as listas <a href="https://open.spotify.com/playlist/1RyECxYyQNlVcNBpTnR36d" target="_blank">“pré-show”</a> e <a href="https://open.spotify.com/playlist/25eQflTePRgRaOKZlJbdbf" target="_blank">“pós-show”</a> no Spotify)</em><br><br>
<strong>G1 - O quanto é diferente esse show do que vimos há três anos. “Trench” tem um conceito forte. Como vocês levam isso para o palco?</strong><br>
<strong>Josh Dun</strong> - O show ficou maior, com mais elementos de produção, baseado na narrativa desse disco. Mas também a gente tenta manter o que veio antes, do “Blurryface” (2015) e “Vessel” (2013). A gente quis manter elementos de cada era, e acho que consegue mostrar uma história dinâmica com tudo junto.<br><br>
<strong>G1 - Ouvi um podcast do New York Times sobre o rock atual e os apresentadores ficaram um tempão tentando definir se o Twenty One Pilots é rock ou não. Teve até briga por causa disso. Então achei que você é a melhor pessoa para dar esse veredito.</strong><br>
<strong>Josh Dun</strong> - Engraçado saber disso. Mas a verdade é que eu não sei, não. Eu acho que eu sei tanto quanto eles. A gente gosta de rock, mas também gosta de outros tipos de música. Acho que essa indefinição é um pouco intencional, mas também natural. Porque eu e o Tyler queremos tocar as músicas que gostamos. E isso passa por muitos gêneros, não só rock.<br>
Quando você tem bateria ao vivo e muitos sons de guitarras, até piano, isso pode te levar a sentir que é rock, mas há outros estilos juntos ali. Eu não sei se eu classificaria nossa banda como de rock, e acho que isso não importa.<br><br>
<strong>G1 - Vocês falam cada vez mais sobre saúde mental nas suas músicas. É uma coisa mais forte na música atual. Vocês cantam sobre isso por falar de suas vidas ou estão fazendo um esforço consciente para tentar ajudar as pessoas?</strong><br>
<strong>Josh Dun</strong> - É um assunto sério, e eu e o Tyler sempre falamos sobre isso. Mas há um tempo essa conversa não era tão fácil. Colocar isso em músicas se tornou uma plataforma que facilitou a levar o tema para as conversas. A gente encontra muita gente depois de shows, e eles compartilham muito com a gente. Ouvimos inúmeras histórias de pessoas e isso nos ajudou. A cultura atual está melhor para tratar disso. É uma evolução, uma coisa importante.', 
'https://g1.globo.com/pop-arte/musica/lollapalooza/2019/noticia/2019/03/29/twenty-one-pilots-nao-sabe-se-faz-rock-e-nao-se-importa-com-isso-diz-baterista-antes-do-lollapalooza.ghtml'
);


/*create table genero (
	id int primary key auto_increment,
    nome varchar(255)
);

insert into genero values
(null, 'Rock'),
(null, 'Pop'),
(null, 'Hip hop');

create table genero_artista (
	id int primary key auto_increment,
    id_artista int,
    id_genero int,
    foreign key (id_artista) references artista(id),
    foreign key (id_genero) references genero(id)
);

create table integrante_artista (
	id int primary key auto_increment,
    nome varchar(255),
    img varchar(255),
    foreign key (id_artista) references artista(id)
);*/