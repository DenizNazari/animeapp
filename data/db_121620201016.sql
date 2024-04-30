-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 27 Mar 2024, 09:32:06
-- Sunucu sürümü: 5.5.45
-- PHP Sürümü: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `db_121620201016`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `animes`
--

CREATE TABLE `animes` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `Synopsis` longtext,
  `Background` varchar(500) DEFAULT NULL,
  `imgnames` varchar(45) NOT NULL,
  `Type` text NOT NULL,
  `youtubelink` varchar(45) NOT NULL,
  `adddate` varchar(45) DEFAULT NULL,
  `animecode` varchar(45) DEFAULT NULL,
  `Episodes` text NOT NULL,
  `Status` text NOT NULL,
  `Aired` text NOT NULL,
  `Premiered` text NOT NULL,
  `Broadcast` text NOT NULL,
  `Previewed` text NOT NULL,
  `Licensors` text NOT NULL,
  `Producers` text NOT NULL,
  `Studios` text NOT NULL,
  `Source` text NOT NULL,
  `Synonyms` text NOT NULL,
  `Japanese` text NOT NULL,
  `text_color` text NOT NULL,
  `page_color_1` text NOT NULL,
  `page_color_2` text NOT NULL,
  `text_color_2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `animes`
--

INSERT INTO `animes` (`id`, `name`, `Synopsis`, `Background`, `imgnames`, `Type`, `youtubelink`, `adddate`, `animecode`, `Episodes`, `Status`, `Aired`, `Premiered`, `Broadcast`, `Previewed`, `Licensors`, `Producers`, `Studios`, `Source`, `Synonyms`, `Japanese`, `text_color`, `page_color_1`, `page_color_2`, `text_color_2`) VALUES
(1, 'ONE PUNCH MAN', 'The seemingly unimpressive Saitama has a rather unique hobby: being a hero. In order to pursue his childhood dream, Saitama relentlessly trained for three years, losing all of his hair in the process. Now, Saitama is so powerful, he can defeat any enemy with just one punch. However, having no one capable of matching his strength has led Saitama to an unexpected problem—he is no longer able to enjoy the thrill of battling and has become quite bored.', 'Episodes 1 and 2 were previewed at a screenin', 'one_punch_man', ' TV', 'CFs3MBWWAv4', 'October 4, 2015', 'a1', '12', 'Finished Airing', ' Oct 5, 2015 to Dec 21, 2015', 'Fall 2015', 'Mondays at 01:05 (JST)', 'TV Tokyo, Bandai Visual, Lantis, Asatsu DK, Banpresto, Good Smile Company, Shueisha, JR East Marketing & Communications', 'VIZ Media', 'TV Tokyo, Bandai Visual, Lantis, Asatsu DK, Banpresto, Good Smile Company, Shueisha, JR East Marketing & Communications', ' Madhouse', 'Web manga', 'One Punch-Man, One-Punch Man, OPM', 'ワンパンマン', 'black', '#F4E869', '#5CD2E6', '#F4E869'),
(2, 'jujutsu kaisen', 'Idly indulging in baseless paranormal activities with the Occult Club, high schooler Yuuji Itadori spends his days at either the clubroom or the hospital, where he visits his bedridden grandfather. However, this leisurely lifestyle soon takes a turn for the strange when he unknowingly encounters a cursed item. Triggering a chain of supernatural occurrences, Yuuji finds himself suddenly thrust into the world of Curses—dreadful beings formed from human malice and negativity—after swallowing the said item, revealed to be a finger belonging to the demon Sukuna Ryoumen, the King of Curses.', 'Winner of the Anime of the Year (TV Series) at the 2022 Tokyo Anime Award Festival (TAAF).', 'jujutsu_kaisen', ' TV', '4A_X-Dvl0ws', 'Oct 3, 2020 to Mar 27, 2021', 'a2', '24', 'Finished Airing', 'Oct 3, 2020 to Mar 27, 2021', ' Fall 2020', ' Saturdays at 01:25 (JST)', 'Mainichi Broadcasting System, TOHO animation, Shueisha, dugout, Sumzap', ' VIZ Media', 'Mainichi Broadcasting System, TOHO animation, Shueisha, dugout, Sumzap', ' MAPPA', ' Manga', '[value-19]', ' 呪術廻戦', '#f8f9fa', '#212529', '#00255b', '#00fff5'),
(3, 'Dr. Stone', 'After five years of harboring unspoken feelings, high-schooler Taiju Ooki is finally ready to confess his love to Yuzuriha Ogawa. Just when Taiju begins his confession however, a blinding green light strikes the Earth and petrifies mankind around the world—turning every single human into stone.\r\n\r\nSeveral millennia later, Taiju awakens to find the modern world completely nonexistent, as nature has flourished in the years humanity stood still. Among a stone world of statues, Taiju encounters one other living human: his science-loving friend Senkuu, who has been active for a few months. Taiju learns that Senkuu has developed a grand scheme—to launch the complete revival of civilization with science. Taiju\'s brawn and Senkuu\'s brains combine to forge a formidable partnership, and they soon uncover a method to revive those petrified.\r\n\r\nHowever, Senkuu\'s master plan is threatened when his ideologies are challenged by those who awaken. All the while, the reason for mankind\'s petrification remains unknown.', 'Dr. Stone adapts chapters 1-60 of the manga.', 'dr_stone', ' TV', '2ei4KpfCOAI', 'July 5, 2019', 'a3', ' 24', 'Finished Airing', ' Jul 5, 2019 to Dec 13, 2019', ' Summer 2019', 'Fridays at 22:00 (JST)', 'TV Tokyo', ' Funimation, Crunchyroll', ' TOHO animation, Shueisha, 8PAN', 'TMS Entertainment', 'Manga', 'Dr. Stone', 'ドクターストーン', '', '0', '', ''),
(4, 'demon slayer', 'ver since the death of his father, the burden of supporting the family has fallen upon Tanjirou Kamado\'s shoulders. Though living impoverished on a remote mountain, the Kamado family are able to enjoy a relatively peaceful and happy life. One day, Tanjirou decides to go down to the local village to make a little money selling charcoal. On his way back, night falls, forcing Tanjirou to take shelter in the house of a strange man, who warns him of the existence of flesh-eating demons that lurk in the woods at night.\r\n\r\nWhen he finally arrives back home the next day, he is met with a horrifying sight—his whole family has been slaughtered. Worse still, the sole survivor is his sister Nezuko, who has been turned into a bloodthirsty demon. Consumed by rage and hatred, Tanjirou swears to avenge his family and stay by his only remaining sibling. Alongside the mysterious group calling themselves the Demon Slayer Corps, Tanjirou will do whatever it takes to slay the demons and protect the remnants of his beloved sister\'s humanity.', 'The anime covers chapters 1 to 53 of the manga.\r\n\r\nKimetsu no Yaiba won the Animation of the Year award in the Television category at the Tokyo Anime Award Festival in 2020.', 'demon_slayer', ' TV', '6vMuWuWlW4I', 'April 6, 2019', 'a4', '26', 'Finished Airing', ' Apr 6, 2019 to Sep 28, 2019', 'Spring 2019', 'Saturdays at 23:30 (JST)', 'TV Tokyo', 'Aniplex of America', 'Aniplex, Shueisha', ' ufotable', 'Manga', ' Blade of Demon Destruction', '鬼滅の刃', '', '0', '', ''),
(5, 'Tokyo Revengers', 'Takemichi Hanagaki\'s second year of middle school was the highest point in his life. He had respect, a gang of friends he could count on, and even a girlfriend. But that was twelve years ago. Today, he\'s a nobody: a washed-up nonentity made fun of by children and always forced to apologize to his younger boss. A sudden news report on the Tokyo Manji Gang\'s cruel murder of the only girlfriend he ever had alongside her brother only adds insult to injury. Half a second before a train ends his pitiful life for good, Takemichi flashes back to that same day 12 years ago, when he was still dating Hinata Tachibana.\n\nAfter being forced to relive the very same day that began his downward spiral, Takemichi meets Hinata\'s younger brother. Without thinking, he admits to his seeming death before flashing back to the past. Takemichi urges him to protect his sister before inexplicably returning to the future. Miraculously, he is not dead. Stranger still, the future has changed. It seems as though Takemichi can alter the flow of time. Given the chance to prevent his ex-girlfriend\'s tragic death at the hands of the Tokyo Manji Gang, Takemichi decides to fly through time to change the course of the future.\n\n[Written by MAL Rewrite]', 'No background information has been added to this title. Help improve our database by adding background information here.', 'tokyo_revengers', ' TV', 'r9M34VgTfzY', 'Sep 19, 2021', 'a5', '24', 'Finished Airing', 'Apr 11, 2021 to Sep 19, 2021', 'Spring 2021', 'Sundays at 02:08 (JST)', 'None found', ' None found', ' Mainichi Broadcasting System, Pony Canyon, Kodansha, AT-X, Ultra Super Pictures, Studio Mausu, Sammy', ' LIDENFILMS', 'Manga', 'Tokyo Revengers', ' 東京リベンジャーズ', '', '', '', ''),
(6, 'Love is war', 'Considered a genius due to having the highest grades in the country, Miyuki Shirogane leads the prestigious Shuchiin Academy\'s student council as its president, working alongside the beautiful and wealthy vice president Kaguya Shinomiya. The two are often regarded as the perfect couple by students despite them not being in any sort of romantic relationship.\n\nHowever, the truth is that after spending so much time together, the two have developed feelings for one another; unfortunately, neither is willing to confess, as doing so would be a sign of weakness. With their pride as elite students on the line, Miyuki and Kaguya embark on a quest to do whatever is necessary to get a confession out of the other. Through their daily antics, the battle of love begins!', 'Kaguya-sama wa Kokurasetai: Tensai-tachi no Renai Zunousen has been published in English as Kaguya-sama: Love Is War by VIZ Media under the Shonen Jump imprint since March 6, 2018.', 'love_is_war', ' TV', '_NkxM_uLUpw', 'Jun 27, 2020', 'a6', '12', 'Finished Airing', 'Apr 11, 2020 to Jun 27, 2020', 'Spring 2020', 'Saturdays at 23:30 (JST)', 'None found', 'Aniplex of America', ' Aniplex, Mainichi Broadcasting System, Shueisha, JR East Marketing & Communications', 'A-1 Pictures', ' Manga', 'Kaguya Wants to be', ' かぐや様は告らせたい？～天才たちの恋愛頭脳戦～', '', '', '', ''),
(7, 'Steins;Gate', 'Eccentric scientist Rintarou Okabe has a never-ending thirst for scientific exploration. Together with his ditzy but well-meaning friend Mayuri Shiina and his roommate Itaru Hashida, Rintarou founds the Future Gadget Laboratory in the hopes of creating technological innovations that baffle the human psyche. Despite claims of grandeur, the only notable \"gadget\" the trio have created is a microwave that has the mystifying power to turn bananas into green goo.\n\nHowever, when Rintarou decides to attend neuroscientist Kurisu Makise\'s conference on time travel, he experiences a series of strange events that lead him to believe that there is more to the \"Phone Microwave\" gadget than meets the eye. Apparently able to send text messages into the past using the microwave, Rintarou dabbles further with the \"time machine,\" attracting the ire and attention of the mysterious organization SERN.\n\nDue to the novel discovery, Rintarou and his friends find themselves in an ever-present danger. As he works to mitigate the damage his invention has caused to the timeline, he is not only fighting a battle to save his loved ones, but also one against his degrading sanity.', 'Steins;Gate is based on 5pb. and Nitroplus\' visual novel of the same title released in 2009. It serves as the second entry in the Science Adventure series.', 'steins_gate', ' TV', '27OZc-ku6is', 'Sep 14, 2011', 'a7', '24', 'Finished Airing', 'Apr 6, 2011 to Sep 14, 2011', 'Spring 2011', 'Wednesdays at 02:05 (JST)', 'None found', ' Funimation', 'Frontier Works, Media Factory, Kadokawa Shoten, Movic, AT-X, Kadokawa Pictures Japan, Nitroplus', 'White Fox', 'Visual novel', 'Steins;Gate', 'STEINS;GATE', '', '', '', ''),
(8, 'Code Geass', 'In the year 2010, the Holy Empire of Britannia is establishing itself as a dominant military nation, starting with the conquest of Japan. Renamed to Area 11 after its swift defeat, Japan has seen significant resistance against these tyrants in an attempt to regain independence.\n\nLelouch Lamperouge, a Britannian student, unfortunately finds himself caught in a crossfire between the Britannian and the Area 11 rebel armed forces. He is able to escape, however, thanks to the timely appearance of a mysterious girl named C.C., who bestows upon him Geass, the \"Power of Kings.\" Realizing the vast potential of his newfound \"power of absolute obedience,\" Lelouch embarks upon a perilous journey as the masked vigilante known as Zero, leading a merciless onslaught against Britannia in order to get revenge once and for all.\n', 'The series won: \"The Best Anime TV Series\" award at the 2007 Tokyo International Anime Fair, \"The Best TV animation\" award at the twelfth Animation Kobe, and \"The Most Popular Anime\" award at the Animage \'s 29th Annual Anime Grand Prix.\n', 'code_geass', ' TV', 'v-AGjx0N24U', 'Jul 29, 2007', 'a8', ' 25', 'Finished Airing', 'Oct 6, 2006 to Jul 29, 2007', 'Fall 2006', 'Fridays at 01:25 (JST)', 'None found', 'Funimation, Bandai Entertainment', 'Bandai Visual, Mainichi Broadcasting System, Bandai, Sony Music Entertainment, Bandai Namco Entertainment, Hakuhodo DY Media Partners', '', 'Original', '	Code Geass: Hangyaku no Lelouch - Nunnally in Wonderland', 'ドギアス 反逆のルル', '', '', '', ''),
(9, 'Berserk', 'Guts, a man who will one day be known as the Black Swordsman, is a young traveling mercenary characterized by the large greatsword he carries. He accepts jobs that offer the most money, but he never stays with one group for long—until he encounters the Band of the Falcon. Ambushed after completing a job, Guts crushes many of its members in combat. Griffith, The Band of the Falcon\'s leader and founder, takes an interest in Guts and duels him. While the others are no match for Guts, Griffith defeats him in one blow.\n\nIncapacitated and taken into the Band of the Falcon\'s camp to recover, Guts wakes up two days later. He confronts Griffith, and the two duel yet again, only this time with a condition: Guts will join the Band of the Falcon if he loses. Due to his fresh injuries, Guts loses the fight and is inducted by Griffith.\n\nIn three years\' time, Guts has become one of the Band of the Falcon\'s commanders. On the battlefield, his combat prowess is second only to Griffith as he takes on large groups of enemies all on his own. With Guts\' immense strength and Griffith\'s leadership, the Band of the Falcon dominate every battle they partake in. But something menacing lurks in the shadows, threatening to change Guts\' life forever', 'Kenpuu Denki Berserk adapts the first 12 volumes and a part of the 13th volume of the manga. While the story remains fairly loyal to the source material, heavy modifications were made to exclude some of the more graphic depictions of violence, as well as characters and other content that could not be covered within the length of the anime’s running time. These changes were approved by the series creator himself.', 'berserk', ' TV', '5g5uPsKDGYg', 'Apr 1, 1998', 'a9', '25', 'Finished Airing', 'Oct 8, 1997 to Apr 1, 1998', 'Fall 1997', 'Wednesdays at 01:45 (JST)', 'None found', ' Discotek Media', 'VAP, Hakusensha, Nippon Television Network', 'OLM', 'Manga', 'Berserk: The Chronicles of Wind Blades, Sword-Wind Chronicle Berserk', ' 剣風伝奇ベルセルク', '', '', '', ''),
(10, 'Tokyo Ghoul', 'A sinister threat is invading Tokyo: flesh-eating \"ghouls\" who appear identical to humans and blend into their population. Reserved college student Ken Kaneki buries his nose in books and avoids the news of the growing crisis. However, the appearance of an attractive woman named Rize Kamishiro shatters his solitude when she forwardly asks him on a date.\n\nWhile walking Rize home, Kaneki discovers she isn\'t as kind as she first appeared, and she has led him on with sinister intent. After a tragic struggle, he later awakens in a hospital to learn his life was saved by transplanting the now deceased Rize\'s organs into his own body.\n\nKaneki\'s body begins to change in horrifying ways, and he transforms into a human-ghoul hybrid. As he embarks on his new dreadful journey, Kaneki clings to his humanity in the evolving bloody conflict between society\'s new monsters and the government agents who hunt the', 'No background information has been added to this title. Help improve our database by adding background information here.\n', 'tokyo_ghoul', ' TV', 'vGuQeQsoRgU', 'Sep 19, 2014', 'a10', '12', 'Finished Airing', ' Jul 4, 2014 to Sep 19, 2014', ' Summer 2014', 'Fridays at 00:00 (JST)', ' Seinen', 'Funimation', 'Marvelous AQL, TC Entertainment, Shueisha', ' Pierrot', 'Manga', 'Tokyo Kushu, Toukyou Kushu, Toukyou Ghoul', '東京喰種-トーキョーグール-', '', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `character`
--

CREATE TABLE `character` (
  `id` int(11) NOT NULL,
  `animecode` varchar(45) DEFAULT NULL,
  `charactername` varchar(45) DEFAULT NULL,
  `character japon name` varchar(45) DEFAULT NULL,
  `about` varchar(800) DEFAULT NULL,
  `position` varchar(45) DEFAULT NULL,
  `imgsource` varchar(200) DEFAULT NULL,
  `details` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `character`
--

INSERT INTO `character` (`id`, `animecode`, `charactername`, `character japon name`, `about`, `position`, `imgsource`, `details`) VALUES
(1, 'a1', 'Saitama', 'サイタマ', '\r\nSaitama is the most powerful hero alive. Having apparently trained himself to superhuman condition, Saitama faces an existential crisis as he is now too powerful to gain any thrill from his heroic deeds.\r\n\r\nHe is registered with the Heroes Association as a C-Class Superhero and is tasked to defend Z-City against Mysterious Beings.', 'MAIN', 'https://cdn.myanimelist.net/images/characters/11/294388.jpg', 'Race: Human<br>\nAge: 25<br>\nHeight: 175 cm (5\'9\")<br>\nWeight: 70 kg (154 lbs)<br>\nLocation: Z-City<br>\nAbilities: Immeasurable Strength, Immeasurable Speed and Reflexes, Infinite Stamina, Supernatural Senses, Invulnerability, Indomitable Will<br>\nOccupation: Superhero<br>\nAffiliation: Hero Association<br>\nPartner(s): GenosAffiliation: Hero Association<br>\nPartner(s): Genos<br>\n'),
(2, 'a1', 'Genos ', 'ジェノス', 'Genos is a 19-year-old cyborg and disciple of Saitama. He is always aiming to become stronger and fights for justice. As a registered Superhero, he is in the S-Class ranking at 14.', 'MAIN', 'https://cdn.myanimelist.net/images/characters/9/297329.jpg', 'Race: Human (Cyborg)\r\nAge: 19\r\nHeight: 178 cm (5\'10\")\r\nLocation: Z-City\r\nAbilities: Cyborg Body\r\nOccupation: Superhero\r\nLevel: S-Class; Rank: 14\r\nAffiliation: Hero Association\r\nPartner(s): Saitama'),
(5, 'a2', 'Gojou, Satoru', '五条 悟', 'Satoru Gojou is the first-year teacher at Tokyo Metropolitan Magic Technical College.', 'MAIN', 'https://cdn.myanimelist.net/images/characters/15/422168.jpg', 'Age: 28<br>\r\nBirthday: December 7, 1989<br>\r\nHeight: 190 cm (6\' 3\")<br>\r\nClan: Gojou Clan<br>\r\nHair: White<br>\r\nEyes: Light Blue<br>'),
(6, 'a2', 'Yuuji Itadori ', '虎杖 悠仁', 'Yuuji, a first-year student at Tokyo Metropolitan Curse Technical College, is a muscular teenager with big light brown eyes and light brown spiky hair. After becoming a host for Sukuna, a small line appeared below each of his eyes.', 'MAIN', 'https://cdn.myanimelist.net/images/characters/11/427601.jpg', 'Age: 15<br>\r\nBirthdate: March 20<br>\r\nHeight: 173 cm (5\'8\'\')<br>\r\nWeight: 80 kg (176 lbs)<br>'),
(7, 'a2', 'Megumi Fushiguro', '伏黒 恵', 'Megumi is a tall, dark-haired boy with blue eyes. He wears the standard uniform of Tokyo Metropolitan Magic Technical College which consists of a long-sleeved shirt and a high collar of dark color, dark trousers and shoes.', 'MAIN', 'https://cdn.myanimelist.net/images/characters/2/392689.jpg', 'Species: human<br>\r\nAge: 15<br>\r\nBirthday: December 22<br>\r\nHeight: 175 cm (5\'9\")<br>\r\nHair color: black<br>'),
(8, 'a2', 'Nobara Kugisaki', '釘崎 野薔薇', 'Kugisaki Nobara is a girl born in Morioka, who moved to Tokyo to get away from the countryside. In order to live the city life in Tokyo, Nobara joined the Tokyo Metropolitan Magic Technical College to avoid worrying about money.', 'MAIN', 'https://cdn.myanimelist.net/images/characters/12/422313.jpg', 'Age: 16 <br>\r\nBirthdate: August 7<br>\r\nHeight: 160 cm (5\'3\'\')<br>'),
(9, 'a2', 'Sukuna Ryoumen', '両面 宿儺', 'Known as the undisputed King of Curses (呪いの王), Sukuna, according to legend, was a demon (though in truth was a human Sorcerer) during the prime era of Sorcery 1000 years ago, and Sorcerers gave their all to defeat him.', 'support', 'https://cdn.myanimelist.net/images/characters/6/431152.jpg', 'Voice Actors\r\nSuwabe, Junichi\r\nJapanese'),
(10, 'a10', 'Kaneki, Ken', '金木 研', 'Originally born as a human, his encounter with a female ghoul under the name of Kamishiro Rize forced him to undergo emergency surgery procedures after his assault by her. Cunning and manipulative, Rize uses her charms and Kaneki\'s attraction toward her as a means of getting her next \"meal.\" After the attack, Kaneki is rushed to the hospital in a half-dead state with Rize', 'MAIN', 'https://cdn.myanimelist.net/images/characters/9/251339.jpg', 'Birthday: December 20<br>\r\nHeight: 169 cm (Pre-Aogiri), 169.5 cm <br>(Post-Aogiri), 170 cm (Tokyo Ghoul:re)<br>\r\nWeight: 55 kg (Pre-Aogiri), 58 kg (Post-Aogiri)<br>\r\nBlood type: AB<br>'),
(11, 'a10', 'Sasaki, Haise', '佐々木 琲世', 'He is the protagonist of Tokyo Ghoul:re, and is a First Class Ghoul Investigator, the mentor of the Quinx Squad and a member of Team Mado. Haise\'s duties are overseen by Akira Mado and Kishou Arima.', 'MAIN', 'https://cdn.myanimelist.net/images/characters/2/484466.jpg', 'Species: Artificial One-Eyed Ghoul<br>\r\nBirthdate: April 2nd<br>\r\nAge: 23<br>\r\nHeight: 170 cm<br>\r\nWeight: 58 kg<br>'),
(12, 'a10', 'Yonebayashi, Saiko', '米林 才子', 'Saiko Yonebayashi is a Rank 2 Ghoul Investigator, a Quinx, and a member of the Quinx Squad.\r\n', 'MAIN', 'https://cdn.myanimelist.net/images/characters/13/362131.jpg', 'Species: Quinx<br>\r\nBirthday: September 4<br>\r\nAge: 19-20<br>\r\nHeight: 143 cm<br>\r\nWeight:  kg (Censored)<br>'),
(13, 'a10', 'Urie, Kuki', '瓜江 久生', 'He is a Rank 1 Ghoul Investigator, a Quinx and the former Squad Leader of the Quinx Squad.\r\n', 'MAIN', 'https://cdn.myanimelist.net/images/characters/8/484467.jpg', 'Species: Quinx<br>\r\nAge: 19<br>\r\nHeight: 173.5 cm<br>\r\nWeight: 60 kg<br>\r\nBlood type: O<br>'),
(14, 'a10', 'Mutsuki, Tooru', '六月 透', 'He is a Rank 3 Ghoul Investigator, an artificial one-eyed ghoul, and a member of CCG\'s Quinx Squad.\r\n', 'MAIN', 'https://cdn.myanimelist.net/images/characters/12/484468.jpg', 'Species: Quinx<br>\r\nAge: 19-20<br>\r\nBirthday: December 14<br>\r\nHeight: 165 cm<br>\r\nWeight: 48 kg<br>\r\nRC type: Bikaku<br>');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `animeid` varchar(45) DEFAULT NULL,
  `gener` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `genres`
--

INSERT INTO `genres` (`id`, `animeid`, `gener`) VALUES
(1, 'a1', 'Action'),
(2, 'a2', 'Comedy'),
(3, 'a10', 'Action'),
(4, 'a10', 'Fantasy'),
(5, 'a10', 'Horror'),
(6, 'a3', 'Adventure'),
(7, 'a3', 'Comedy'),
(8, 'a3', 'Sci-Fi'),
(9, 'a4', 'Action'),
(10, 'a4', 'Award Winning'),
(11, 'a4', 'Fantasy'),
(12, 'a5', 'Action'),
(13, 'a5', 'Drama'),
(14, 'a5', 'Supernatural'),
(15, 'a6', 'Comedy'),
(18, 'a7', 'Drama'),
(19, 'a7', 'Sci-Fi'),
(20, 'a7', 'Suspense'),
(21, 'a8', 'Action'),
(22, 'a8', 'Award Winning'),
(23, 'a8', 'Drama'),
(24, 'a8', 'Sci-Fi'),
(25, 'a9', 'Action'),
(26, 'a9', 'Adventure'),
(27, 'a9', 'Drama'),
(28, 'a9', 'Fantasy'),
(29, 'a9', 'Horror');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesages`
--

CREATE TABLE `mesages` (
  `id` int(11) NOT NULL,
  `userid` varchar(45) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  `mesagescol` varchar(45) DEFAULT NULL,
  `text` varchar(45) DEFAULT NULL,
  `like` varchar(45) DEFAULT NULL,
  `animecode` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `themes`
--

CREATE TABLE `themes` (
  `id` int(11) NOT NULL,
  `animeid` varchar(45) DEFAULT NULL,
  `theme` varchar(45) DEFAULT NULL,
  `animes_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `themes`
--

INSERT INTO `themes` (`id`, `animeid`, `theme`, `animes_id`) VALUES
(1, 'a1', 'Adult Cast', 0),
(2, 'a1', 'Parody', 0),
(3, 'a1', 'Super Power', 0),
(4, 'a10', 'Gore', 10),
(5, 'a10', 'Psychological', 10),
(6, 'a2', 'School', 2),
(7, 'a3', 'Time Travel', 3),
(8, 'a4', 'Historical', 4),
(9, 'a5', ' Delinquents', 5),
(10, 'a5', 'Time Travel', 5),
(11, 'a6', 'Psychological', 6),
(12, 'a6', 'Romantic Subtext', 6),
(13, 'a6', 'School', 6),
(14, 'a7', 'Psychological', 7),
(15, 'a7', 'Time Travel', 7),
(16, 'a8', 'Mecha', 8),
(17, 'a8', 'Military', 8),
(18, 'a8', 'Super Power', 8),
(19, 'a9', 'Gore', 9),
(20, 'a9', 'Military', 9);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `usercode` varchar(45) DEFAULT NULL,
  `commentpoint` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `animes`
--
ALTER TABLE `animes`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `character`
--
ALTER TABLE `character`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `mesages`
--
ALTER TABLE `mesages`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `animes`
--
ALTER TABLE `animes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Tablo için AUTO_INCREMENT değeri `themes`
--
ALTER TABLE `themes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
