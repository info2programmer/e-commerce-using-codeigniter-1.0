-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2017 at 09:40 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bivapublication`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblauthorpost`
--

CREATE TABLE `tblauthorpost` (
  `Id` int(11) NOT NULL,
  `PostTitle` varchar(255) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `Gener` varchar(255) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `AutherName` varchar(255) NOT NULL,
  `PostDetails` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `PostDateAndTime` date NOT NULL,
  `AuthorDescription` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `PostImage` varchar(100) NOT NULL,
  `AuthorImage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblauthorpost`
--

INSERT INTO `tblauthorpost` (`Id`, `PostTitle`, `Gener`, `AutherName`, `PostDetails`, `PostDateAndTime`, `AuthorDescription`, `PostImage`, `AuthorImage`) VALUES
(3, 'বাংলায় নমুনা লেখা – বাংলা Lorem ipsum', 'Romance Genre', 'John Doe', 'আমার বাংলা নিয়ে প্রথম কাজ করবার সুযোগ তৈরি হয়েছিল অভ্র^ নামক এক যুগান্তকারী বাংলা সফ্‌টওয়্যারের মধ্য দিয়ে। এর পর একে একে বাংলা উইকিপিডিয়া, ওয়ার্ডপ্রেস বাংলা কোডেক্সসহ বিভিন্ন বাংলা অনলাইন পত্রিকা তৈরির কাজ করতে করতে বাংলার সাথে নিজেকে বেঁধে নিয়েছি আষ্টেপৃষ্ঠে। বিশেষ করে অনলাইন পত্রিকা তৈরি করতে ডিযাইন করার সময়, সেই ডিযাইনকে কোডে রূপান্তর করবার সময় বারবার অনুভব করেছি কিছু নমুনা লেখার। যে লেখাগুলো ফটোশপে বসিয়ে বাংলায় ডিযাইন করা যাবে, আবার সেই লেখাই অনলাইনে ব্যবহার করা যাবে। কিন্তু দুঃখজনক হলেও সত্য যে, ইংরেজিতে লাতিন Lorem Ipsum… সূচক নমুনা লেখা (dummy texts) থাকলেও বাংলা ভাষায় এরকম কোনো লেখা নেই। তাই নিজের তাগিদেই বাংলা ভাষার জন্য প্রথম নমুনা লেখা তৈরি করলাম, এ হলো বাংলা Lorem ipsum – কিন্তু তার অনুবাদ নয়। আমি একে নামকরণ করেছি: অর্থহীন লেখা!\r\n\r\nআমি কোনো ভাষাবিজ্ঞানী নই। তাই ভাষাগত, শব্দব্যঞ্জনগত শুদ্ধতা, তাল-লয় -এসব বিষয়ে আমার জ্ঞান খুবই প্রাথমিক। তাই এই লেখায় এসব ভাষাবিজ্ঞানগত তাত্ত্বিক উপাদান খুঁজতে যাওয়া অর্থহীন হবে। আমি চেষ্টা করেছি বাংলা ভাষায় দীর্ঘ শব্দ রাখতে, তবে তা দীর্ঘতম – এমন দাবি আমি করছি না। আমি চেষ্টা করেছি, অংক (সংখ্যা) রাখতে, যাতে ফন্টের অবয়বটা টের পাওয়া যায়। আমি চেষ্টা করেছি যুক্তাক্ষর রাখতে, যতিচিহ্ন রাখতে,… অর্ধমাত্রার অক্ষর, পূর্ণমাত্রার অক্ষর, মাত্রাহীন অক্ষর, কার-ফলাযুক্ত শব্দ, বাক্যের এখানে-ওখানে রাখতে।\r\n\r\nবাংলা সব অক্ষর রাখার একটা চেষ্টা ছিল। কিন্তু তা ব্যর্থ – আমি শেষে এই চেষ্টা করাটাকেই অপ্রয়োজনীয় মনে করলাম। এ-তো আর বাংলা ভাষার আগার হচ্ছে না, এ হলো পরম্পরাহীন, কিংবা তাৎপর্যপূর্ণ একটি লেখা, যা বাংলা ভাষার প্রতিনিধিত্ব করবে টাইপসেটিং, প্রিন্টিং, ইন্ডাস্ট্রিতে কিংবা ওয়েব ডিযাইনে।\r\n\r\nঅর্থহীন লেখা\r\n\r\nঅর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?\r\n\r\nযে কথাকে কাজে লাগাতে চাও, তাকে কাজে লাগানোর কথা চিন্তা করার আগে ভাবো, তুমি কি সেই কথার জাদুতে আচ্ছন্ন হয়ে গেছ কিনা। তুমি যদি নিশ্চিত হও যে, তুমি কোনো মোহাচ্ছাদিত আবহে আবিষ্ট হয়ে অন্যের শেখানো বুলি আত্মস্থ করছো না, তাহলে তুমি নির্ভয়ে, নিশ্চিন্তে অগ্রসর হও। তুমি সেই কথাকে জানো, বুঝো, আত্মস্থ করো; মনে রাখবে, যা অনুসরণ করতে চলেছো, তা আগে অনুধাবন করা জরুরি; এখানে কিংকর্তব্যবিমূঢ় হবার কোনো সুযোগ নেই।\r\n\r\nকোনো কথা শোনামাত্রই কি তুমি তা বিশ্বাস করবে? হয়তো বলবে, করবে, হয়তো বলবে “আমি করবো না।” হ্যা, “আমি করবো না” বললেই সবকিছু অস্বীকার করা যায় না, হয়তো তুমি মনের গহীন গভীর থেকে ঠিকই বিশ্বাস করতে শুরু করেছো সেই কথাটি, কিন্তু মুখে অস্বীকার করছো। তাই সচেতন থাকো, তুমি কী ভাবছো— তার প্রতি; সচেতন থাকো, তুমি কি আসলেই বিশ্বাস করতে চলেছো ঐ কথাটি… শুধু এতটুকু বলি, যা-ই বিশ্বাস করো না কেন, আগে যাচাই করে নাও; আর এতে চাই তোমার প্রত্যুৎপন্নমতিত্ব।\r\n\r\nতাই কোন কথাটি কাজে লাগবে, তা নির্ধারণ করবে তুমি— হ্যাঁ, তুমি। হয়তো সামান্য ক’টা বাংলা অক্ষর: খন্ড-ত, অনুস্বার, বিঃসর্গ কিংবা চন্দ্রবিন্দু— কিন্তু যদি তুমি বিশ্বাস করো, তাহলে হয়তো তুমি তা দিয়েই তৈরি করতে পারো এক উচ্চমার্গীয় মহাকাব্য- এক চিরসবুজ অর্ঘ্য। রচিত হতে পারে পৃথিবীর ১ম বিরাম চিহ্নের ইতিকথা – এক নতুন ঊষা। …মহাকাব্য লিখতে ঋষি-মুনি হওয়া লাগে না।\r\nঅর্থহীনতা আর অর্থদ্যোতনার সেই ঈর্ষাকাতর মোহাবিষ্টতা তাই তৈরি করে নাও নিজের মাঝে- চাই একটুখানি ঔৎসুক্য। নিজেই ঠিক করো, নিজের ভাষাটা কি অর্থহীন, নাকি কিছু সত্যিই বলছে!আমার বাংলা নিয়ে প্রথম কাজ করবার সুযোগ তৈরি হয়েছিল অভ্র^ নামক এক যুগান্তকারী বাংলা সফ্‌টওয়্যারের মধ্য দিয়ে। এর পর একে একে বাংলা উইকিপিডিয়া, ওয়ার্ডপ্রেস বাংলা কোডেক্সসহ বিভিন্ন বাংলা অনলাইন পত্রিকা তৈরির কাজ করতে করতে বাংলার সাথে নিজেকে বেঁধে নিয়েছি আষ্টেপৃষ্ঠে। বিশেষ করে অনলাইন পত্রিকা তৈরি করতে ডিযাইন করার সময়, সেই ডিযাইনকে কোডে রূপান্তর করবার সময় বারবার অনুভব করেছি কিছু নমুনা লেখার। যে লেখাগুলো ফটোশপে বসিয়ে বাংলায় ডিযাইন করা যাবে, আবার সেই লেখাই অনলাইনে ব্যবহার করা যাবে। কিন্তু দুঃখজনক হলেও সত্য যে, ইংরেজিতে লাতিন Lorem Ipsum… সূচক নমুনা লেখা (dummy texts) থাকলেও বাংলা ভাষায় এরকম কোনো লেখা নেই। তাই নিজের তাগিদেই বাংলা ভাষার জন্য প্রথম নমুনা লেখা তৈরি করলাম, এ হলো বাংলা Lorem ipsum – কিন্তু তার অনুবাদ নয়। আমি একে নামকরণ করেছি: অর্থহীন লেখা!\r\n\r\nআমি কোনো ভাষাবিজ্ঞানী নই। তাই ভাষাগত, শব্দব্যঞ্জনগত শুদ্ধতা, তাল-লয় -এসব বিষয়ে আমার জ্ঞান খুবই প্রাথমিক। তাই এই লেখায় এসব ভাষাবিজ্ঞানগত তাত্ত্বিক উপাদান খুঁজতে যাওয়া অর্থহীন হবে। আমি চেষ্টা করেছি বাংলা ভাষায় দীর্ঘ শব্দ রাখতে, তবে তা দীর্ঘতম – এমন দাবি আমি করছি না। আমি চেষ্টা করেছি, অংক (সংখ্যা) রাখতে, যাতে ফন্টের অবয়বটা টের পাওয়া যায়। আমি চেষ্টা করেছি যুক্তাক্ষর রাখতে, যতিচিহ্ন রাখতে,… অর্ধমাত্রার অক্ষর, পূর্ণমাত্রার অক্ষর, মাত্রাহীন অক্ষর, কার-ফলাযুক্ত শব্দ, বাক্যের এখানে-ওখানে রাখতে।\r\n\r\nবাংলা সব অক্ষর রাখার একটা চেষ্টা ছিল। কিন্তু তা ব্যর্থ – আমি শেষে এই চেষ্টা করাটাকেই অপ্রয়োজনীয় মনে করলাম। এ-তো আর বাংলা ভাষার আগার হচ্ছে না, এ হলো পরম্পরাহীন, কিংবা তাৎপর্যপূর্ণ একটি লেখা, যা বাংলা ভাষার প্রতিনিধিত্ব করবে টাইপসেটিং, প্রিন্টিং, ইন্ডাস্ট্রিতে কিংবা ওয়েব ডিযাইনে।\r\n\r\nঅর্থহীন লেখা\r\n\r\nঅর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?\r\n\r\nযে কথাকে কাজে লাগাতে চাও, তাকে কাজে লাগানোর কথা চিন্তা করার আগে ভাবো, তুমি কি সেই কথার জাদুতে আচ্ছন্ন হয়ে গেছ কিনা। তুমি যদি নিশ্চিত হও যে, তুমি কোনো মোহাচ্ছাদিত আবহে আবিষ্ট হয়ে অন্যের শেখানো বুলি আত্মস্থ করছো না, তাহলে তুমি নির্ভয়ে, নিশ্চিন্তে অগ্রসর হও। তুমি সেই কথাকে জানো, বুঝো, আত্মস্থ করো; মনে রাখবে, যা অনুসরণ করতে চলেছো, তা আগে অনুধাবন করা জরুরি; এখানে কিংকর্তব্যবিমূঢ় হবার কোনো সুযোগ নেই।\r\n\r\nকোনো কথা শোনামাত্রই কি তুমি তা বিশ্বাস করবে? হয়তো বলবে, করবে, হয়তো বলবে “আমি করবো না।” হ্যা, “আমি করবো না” বললেই সবকিছু অস্বীকার করা যায় না, হয়তো তুমি মনের গহীন গভীর থেকে ঠিকই বিশ্বাস করতে শুরু করেছো সেই কথাটি, কিন্তু মুখে অস্বীকার করছো। তাই সচেতন থাকো, তুমি কী ভাবছো— তার প্রতি; সচেতন থাকো, তুমি কি আসলেই বিশ্বাস করতে চলেছো ঐ কথাটি… শুধু এতটুকু বলি, যা-ই বিশ্বাস করো না কেন, আগে যাচাই করে নাও; আর এতে চাই তোমার প্রত্যুৎপন্নমতিত্ব।\r\n\r\nতাই কোন কথাটি কাজে লাগবে, তা নির্ধারণ করবে তুমি— হ্যাঁ, তুমি। হয়তো সামান্য ক’টা বাংলা অক্ষর: খন্ড-ত, অনুস্বার, বিঃসর্গ কিংবা চন্দ্রবিন্দু— কিন্তু যদি তুমি বিশ্বাস করো, তাহলে হয়তো তুমি তা দিয়েই তৈরি করতে পারো এক উচ্চমার্গীয় মহাকাব্য- এক চিরসবুজ অর্ঘ্য। রচিত হতে পারে পৃথিবীর ১ম বিরাম চিহ্নের ইতিকথা – এক নতুন ঊষা। …মহাকাব্য লিখতে ঋষি-মুনি হওয়া লাগে না।\r\nঅর্থহীনতা আর অর্থদ্যোতনার সেই ঈর্ষাকাতর মোহাবিষ্টতা তাই তৈরি করে নাও নিজের মাঝে- চাই একটুখানি ঔৎসুক্য। নিজেই ঠিক করো, নিজের ভাষাটা কি অর্থহীন, নাকি কিছু সত্যিই বলছে!আমার বাংলা নিয়ে প্রথম কাজ করবার সুযোগ তৈরি হয়েছিল অভ্র^ নামক এক যুগান্তকারী বাংলা সফ্‌টওয়্যারের মধ্য দিয়ে। এর পর একে একে বাংলা উইকিপিডিয়া, ওয়ার্ডপ্রেস বাংলা কোডেক্সসহ বিভিন্ন বাংলা অনলাইন পত্রিকা তৈরির কাজ করতে করতে বাংলার সাথে নিজেকে বেঁধে নিয়েছি আষ্টেপৃষ্ঠে। বিশেষ করে অনলাইন পত্রিকা তৈরি করতে ডিযাইন করার সময়, সেই ডিযাইনকে কোডে রূপান্তর করবার সময় বারবার অনুভব করেছি কিছু নমুনা লেখার। যে লেখাগুলো ফটোশপে বসিয়ে বাংলায় ডিযাইন করা যাবে, আবার সেই লেখাই অনলাইনে ব্যবহার করা যাবে। কিন্তু দুঃখজনক হলেও সত্য যে, ইংরেজিতে লাতিন Lorem Ipsum… সূচক নমুনা লেখা (dummy texts) থাকলেও বাংলা ভাষায় এরকম কোনো লেখা নেই। তাই নিজের তাগিদেই বাংলা ভাষার জন্য প্রথম নমুনা লেখা তৈরি করলাম, এ হলো বাংলা Lorem ipsum – কিন্তু তার অনুবাদ নয়। আমি একে নামকরণ করেছি: অর্থহীন লেখা!\r\n\r\nআমি কোনো ভাষাবিজ্ঞানী নই। তাই ভাষাগত, শব্দব্যঞ্জনগত শুদ্ধতা, তাল-লয় -এসব বিষয়ে আমার জ্ঞান খুবই প্রাথমিক। তাই এই লেখায় এসব ভাষাবিজ্ঞানগত তাত্ত্বিক উপাদান খুঁজতে যাওয়া অর্থহীন হবে। আমি চেষ্টা করেছি বাংলা ভাষায় দীর্ঘ শব্দ রাখতে, তবে তা দীর্ঘতম – এমন দাবি আমি করছি না। আমি চেষ্টা করেছি, অংক (সংখ্যা) রাখতে, যাতে ফন্টের অবয়বটা টের পাওয়া যায়। আমি চেষ্টা করেছি যুক্তাক্ষর রাখতে, যতিচিহ্ন রাখতে,… অর্ধমাত্রার অক্ষর, পূর্ণমাত্রার অক্ষর, মাত্রাহীন অক্ষর, কার-ফলাযুক্ত শব্দ, বাক্যের এখানে-ওখানে রাখতে।\r\n\r\nবাংলা সব অক্ষর রাখার একটা চেষ্টা ছিল। কিন্তু তা ব্যর্থ – আমি শেষে এই চেষ্টা করাটাকেই অপ্রয়োজনীয় মনে করলাম। এ-তো আর বাংলা ভাষার আগার হচ্ছে না, এ হলো পরম্পরাহীন, কিংবা তাৎপর্যপূর্ণ একটি লেখা, যা বাংলা ভাষার প্রতিনিধিত্ব করবে টাইপসেটিং, প্রিন্টিং, ইন্ডাস্ট্রিতে কিংবা ওয়েব ডিযাইনে।\r\n\r\nঅর্থহীন লেখা\r\n\r\nঅর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?\r\n\r\nযে কথাকে কাজে লাগাতে চাও, তাকে কাজে লাগানোর কথা চিন্তা করার আগে ভাবো, তুমি কি সেই কথার জাদুতে আচ্ছন্ন হয়ে গেছ কিনা। তুমি যদি নিশ্চিত হও যে, তুমি কোনো মোহাচ্ছাদিত আবহে আবিষ্ট হয়ে অন্যের শেখানো বুলি আত্মস্থ করছো না, তাহলে তুমি নির্ভয়ে, নিশ্চিন্তে অগ্রসর হও। তুমি সেই কথাকে জানো, বুঝো, আত্মস্থ করো; মনে রাখবে, যা অনুসরণ করতে চলেছো, তা আগে অনুধাবন করা জরুরি; এখানে কিংকর্তব্যবিমূঢ় হবার কোনো সুযোগ নেই।\r\n\r\nকোনো কথা শোনামাত্রই কি তুমি তা বিশ্বাস করবে? হয়তো বলবে, করবে, হয়তো বলবে “আমি করবো না।” হ্যা, “আমি করবো না” বললেই সবকিছু অস্বীকার করা যায় না, হয়তো তুমি মনের গহীন গভীর থেকে ঠিকই বিশ্বাস করতে শুরু করেছো সেই কথাটি, কিন্তু মুখে অস্বীকার করছো। তাই সচেতন থাকো, তুমি কী ভাবছো— তার প্রতি; সচেতন থাকো, তুমি কি আসলেই বিশ্বাস করতে চলেছো ঐ কথাটি… শুধু এতটুকু বলি, যা-ই বিশ্বাস করো না কেন, আগে যাচাই করে নাও; আর এতে চাই তোমার প্রত্যুৎপন্নমতিত্ব।\r\n\r\nতাই কোন কথাটি কাজে লাগবে, তা নির্ধারণ করবে তুমি— হ্যাঁ, তুমি। হয়তো সামান্য ক’টা বাংলা অক্ষর: খন্ড-ত, অনুস্বার, বিঃসর্গ কিংবা চন্দ্রবিন্দু— কিন্তু যদি তুমি বিশ্বাস করো, তাহলে হয়তো তুমি তা দিয়েই তৈরি করতে পারো এক উচ্চমার্গীয় মহাকাব্য- এক চিরসবুজ অর্ঘ্য। রচিত হতে পারে পৃথিবীর ১ম বিরাম চিহ্নের ইতিকথা – এক নতুন ঊষা। …মহাকাব্য লিখতে ঋষি-মুনি হওয়া লাগে না।\r\nঅর্থহীনতা আর অর্থদ্যোতনার সেই ঈর্ষাকাতর মোহাবিষ্টতা তাই তৈরি করে নাও নিজের মাঝে- চাই একটুখানি ঔৎসুক্য। নিজেই ঠিক করো, নিজের ভাষাটা কি অর্থহীন, নাকি কিছু সত্যিই বলছে!', '2017-07-19', 'অর্থহীন লেখা  অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?  যে কথাকে কাজে লাগাতে চাও, তাকে কাজে লাগানোর কথা চিন্তা করার আগে ভাবো, তুমি কি সেই কথার জাদুতে আচ্ছন্ন হয়ে গেছ কিনা। তুমি যদি নিশ্চিত হও যে, তুমি কোনো মোহাচ্ছাদিত আবহে আবিষ্ট হয়ে অন্যের শেখানো বুলি আত্মস্থ করছো না, তাহলে তুমি নির্ভয়ে, নিশ্চিন্তে অগ্রসর হও। তুমি সেই কথাকে জানো, বুঝো, আত্মস্থ করো; মনে রাখবে, যা অনুসরণ করতে চলেছো, তা আগে অনুধাবন করা জরুরি; এখানে কিংকর্তব্যবিমূঢ় হবার কোনো সুযোগ নেই।  কোনো কথা শোনামাত্রই কি তুমি তা বিশ্বাস করবে? হয়তো বলবে, করবে, হয়তো বলবে “আমি করবো না।” হ্যা, “আমি করবো না” বললেই সবকিছু অস্বীকার করা যায় না, হয়তো তুমি মনের গহীন গভীর থেকে ঠিকই বিশ্বাস করতে শুরু করেছো সেই কথাটি, কিন্তু মুখে অস্বীকার করছো। তাই সচেতন থাকো, তুমি কী ভাবছো— তার প্রতি; সচেতন থাকো, তুমি কি আসলেই বিশ্বাস করতে চলেছো ঐ কথাটি… শুধু এতটুকু বলি, যা-ই বিশ্বাস করো না কেন, আগে যাচাই করে নাও; আর এতে চাই তোমার প্রত্যুৎপন্নমতিত্ব।  তাই কোন কথাটি কাজে লাগবে, তা নির্ধারণ করবে তুমি— হ্যাঁ, তুমি। হয়তো সামান্য ক’টা বাংলা অক্ষর: খন্ড-ত, অনুস্বার, বিঃসর্গ কিংবা চন্দ্রবিন্দু— কিন্তু যদি তুমি বিশ্বাস করো, তাহলে হয়তো তুমি তা দিয়েই তৈরি করতে পারো এক উচ্চমার্গীয় মহাকাব্য- এক চিরসবুজ অর্ঘ্য। রচিত হতে পারে পৃথিবীর ১ম বিরাম চিহ্নের ইতিকথা – এক নতুন ঊষা। …মহাকাব্য লিখতে ঋষি-মুনি হওয়া লাগে না। অর্থহীনতা আর অর্থদ্যোতনার সেই ঈর্ষাকাতর মোহাবিষ্টতা তাই তৈরি করে নাও নিজের মাঝে- চাই একটুখানি ঔৎসুক্য। নিজেই ঠিক করো, নিজের ভাষাটা কি অর্থহীন, নাকি কিছু সত্যিই বলছে!', 'Desert.jpg', 'Koala1.jpg'),
(4, 'বাংলায় নমুনা লেখা – বাংলা Lorem ipsum', 'Romance And Genre', 'Saikat Bhadury', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n\r\nWhere does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', '2017-07-28', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Chrysanthemum.jpg', 'Penguins1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_adminlogin`
--

CREATE TABLE `tbl_adminlogin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_adminlogin`
--

INSERT INTO `tbl_adminlogin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin@bivapublication.com', '1CA9CBE2B6DF93D6DB68C5FAD06905F3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `BannerId` int(11) NOT NULL,
  `BannerImage` varchar(255) NOT NULL,
  `BannerURL` varchar(255) NOT NULL,
  `AddedBy` varchar(100) NOT NULL,
  `Addtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`BannerId`, `BannerImage`, `BannerURL`, `AddedBy`, `Addtime`) VALUES
(1, 'b-1.jpg', '', 'Admin', '2017-06-05 09:46:09'),
(2, 'b-2.jpg', '', 'Admin', '2017-06-05 09:46:09'),
(3, 'b-3.jpg', '', 'Admin', '2017-06-05 09:46:09'),
(4, 'b-4.jpg', '', 'Admin', '2017-06-05 09:46:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bestseller`
--

CREATE TABLE `tbl_bestseller` (
  `SerialNo` int(11) NOT NULL,
  `Product_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bestseller`
--

INSERT INTO `tbl_bestseller` (`SerialNo`, `Product_Id`) VALUES
(1, 14);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bvpoint_data`
--

CREATE TABLE `tbl_bvpoint_data` (
  `ReferenceId` int(11) NOT NULL,
  `CustomerMail` varchar(100) NOT NULL,
  `TrDate` datetime NOT NULL,
  `OrderId` int(11) DEFAULT NULL,
  `ReferedTo` varchar(100) DEFAULT NULL,
  `UniqueKey` varchar(100) DEFAULT NULL,
  `EarnedPotint` int(11) NOT NULL,
  `Note` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bvpoint_data`
--

INSERT INTO `tbl_bvpoint_data` (`ReferenceId`, `CustomerMail`, `TrDate`, `OrderId`, `ReferedTo`, `UniqueKey`, `EarnedPotint`, `Note`) VALUES
(18, 'saikat@visioncreative.co.in', '2017-08-01 12:25:26', 37, NULL, NULL, 25, 'Purchase (#ORDBPH37) and earned 25 Biva Points'),
(19, 'saikat@visioncreative.co.in', '2017-08-01 12:29:22', 38, NULL, NULL, -25, 'Purchased (#ORDBPH38) And Redeemed -25 Biva Points'),
(20, 'saikat@visioncreative.co.in', '2017-08-01 12:30:08', 38, NULL, NULL, 25, 'Purchase (#ORDBPH38) and earned 25 Biva Points');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `CategoryId` int(11) NOT NULL,
  `CategoryName` varchar(100) NOT NULL,
  `CategoryDescription` varchar(255) DEFAULT NULL,
  `CategoryActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`CategoryId`, `CategoryName`, `CategoryDescription`, `CategoryActive`) VALUES
(1, 'ALL BOOKS', '', 1),
(2, 'VALUE FOR MONEY', '', 1),
(3, 'PRE-ORDER', '', 1),
(4, 'NEW RELEASES', '', 1),
(5, 'BIVA CLASSICS', '', 1),
(6, 'THRILLER & ADVENTURE', '', 1),
(7, 'POEM & VERSE', '', 1),
(8, 'ROMANCE GENRE', '', 1),
(9, 'TEENAGE & CHILD FICTION', '', 1),
(10, 'SCIENCE GENRE', '', 1),
(11, 'SOCIAL DRAMA', '', 1),
(12, 'PHILOSOPHY & BELIEFS', '', 1),
(13, 'LITTLE MAGAZINE HUB', '', 1),
(14, 'BOOKS OF OTHER PUBLISHER', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cod`
--

CREATE TABLE `tbl_cod` (
  `LocationId` int(11) NOT NULL,
  `LocationName` varchar(255) NOT NULL,
  `PinCode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cod`
--

INSERT INTO `tbl_cod` (`LocationId`, `LocationName`, `PinCode`) VALUES
(1, 'Kolkata', 733129);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_coupon`
--

CREATE TABLE `tbl_coupon` (
  `CouponId` int(11) NOT NULL,
  `CouponCode` varchar(50) NOT NULL,
  `CouponPersonName` varchar(50) DEFAULT NULL,
  `CouponPersonEmail` varchar(100) DEFAULT NULL,
  `CouponPersonPhone` varchar(20) DEFAULT NULL,
  `CouponStatus` tinyint(1) NOT NULL,
  `CouponDiscount` float NOT NULL,
  `CouponType` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_coupon`
--

INSERT INTO `tbl_coupon` (`CouponId`, `CouponCode`, `CouponPersonName`, `CouponPersonEmail`, `CouponPersonPhone`, `CouponStatus`, `CouponDiscount`, `CouponType`) VALUES
(2, 'BIVA40', '', '', '', 1, 40, 'cash'),
(3, 'BIVA20', '', '', '', 1, 20, 'trad');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_couponimage`
--

CREATE TABLE `tbl_couponimage` (
  `Id` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_coverbookimage`
--

CREATE TABLE `tbl_coverbookimage` (
  `id` int(11) NOT NULL,
  `coverbook` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_coverbookimage`
--

INSERT INTO `tbl_coverbookimage` (`id`, `coverbook`) VALUES
(8, 'd1.jpg'),
(9, 'd2.jpg'),
(10, 'd3.jpg'),
(11, 'd4.jpg'),
(12, 'd5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_lineitems`
--

CREATE TABLE `tbl_order_lineitems` (
  `LintItemId` int(11) NOT NULL,
  `OrdId` int(11) NOT NULL,
  `ItemId` int(11) NOT NULL,
  `ItemName` varchar(100) NOT NULL,
  `ItemEdition` varchar(30) NOT NULL,
  `ItemAuther` varchar(100) NOT NULL,
  `ItemQuantity` int(11) NOT NULL,
  `ItemRetailPrice` float NOT NULL,
  `ItemSellingPrice` float NOT NULL,
  `ItemDiscount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order_lineitems`
--

INSERT INTO `tbl_order_lineitems` (`LintItemId`, `OrdId`, `ItemId`, `ItemName`, `ItemEdition`, `ItemAuther`, `ItemQuantity`, `ItemRetailPrice`, `ItemSellingPrice`, `ItemDiscount`) VALUES
(27, 30, 14, '6-E Chhanda', '1', 'Moumita Ghosh', 1, 188, 151, 20),
(28, 31, 14, '6-E Chhanda', '1', 'Moumita Ghosh', 1, 188, 151, 20),
(29, 32, 14, '6-E Chhanda', '1', 'Moumita Ghosh', 1, 188, 151, 20),
(30, 33, 14, '6-E Chhanda', '1', 'Moumita Ghosh', 1, 188, 151, 20),
(31, 34, 14, '6-E Chhanda', '1', 'Moumita Ghosh', 1, 188, 151, 20),
(32, 35, 14, '6-E Chhanda', '1', 'Moumita Ghosh', 1, 188, 151, 20),
(33, 36, 14, '6-E Chhanda', '1', 'Moumita Ghosh', 1, 188, 151, 20),
(34, 37, 14, '6-E Chhanda', '1', 'Moumita Ghosh', 1, 188, 151, 20),
(35, 38, 14, '6-E Chhanda', '1', 'Moumita Ghosh', 2, 188, 151, 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_shipment`
--

CREATE TABLE `tbl_order_shipment` (
  `ShipmentId` int(11) NOT NULL,
  `OrdId` int(11) NOT NULL,
  `ShipmentQuantity` int(11) DEFAULT NULL,
  `OrderPackDate` date DEFAULT NULL,
  `OrderShipmentDate` date DEFAULT NULL,
  `OrderDeliveryDate` date DEFAULT NULL,
  `ShipmentCourier` varchar(100) DEFAULT NULL,
  `OrderTrackingId` varchar(25) DEFAULT NULL,
  `OrderTrackingURL` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order_shipment`
--

INSERT INTO `tbl_order_shipment` (`ShipmentId`, `OrdId`, `ShipmentQuantity`, `OrderPackDate`, `OrderShipmentDate`, `OrderDeliveryDate`, `ShipmentCourier`, `OrderTrackingId`, `OrderTrackingURL`) VALUES
(1, 37, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 37, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 38, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_summery`
--

CREATE TABLE `tbl_order_summery` (
  `OrderId` int(11) NOT NULL,
  `OrderBY` varchar(60) NOT NULL,
  `OrderDateTime` datetime DEFAULT NULL,
  `OrderQuantity` int(11) NOT NULL,
  `OrderTax` varchar(50) DEFAULT NULL,
  `OrderCuponCode` varchar(5) DEFAULT NULL,
  `OrderDiscount` float DEFAULT NULL,
  `OrderShipmentCharge` float NOT NULL,
  `OrderTotAmount` float NOT NULL,
  `OrderShipName` varchar(60) NOT NULL,
  `OrderShipAddressL1` varchar(255) NOT NULL,
  `OrderShipAddressL2` varchar(255) DEFAULT NULL,
  `OrderShipAddressL3` varchar(255) DEFAULT NULL,
  `OrderShipAddressL4` varchar(255) DEFAULT NULL,
  `OrderLandmark` varchar(100) DEFAULT NULL,
  `OrderCity` varchar(100) NOT NULL,
  `OrderState` varchar(100) NOT NULL,
  `OrderZip` int(11) NOT NULL,
  `OrderCountry` varchar(30) DEFAULT NULL,
  `OrderPhone` varchar(12) NOT NULL,
  `OrderEmail` varchar(155) NOT NULL,
  `OrderNotes` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `OrderStatus` varchar(255) NOT NULL,
  `PaymentMode` varchar(255) NOT NULL,
  `OrderTentativeDate` date DEFAULT NULL,
  `OrderCancelDate` date DEFAULT NULL,
  `OrderCancelReason` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order_summery`
--

INSERT INTO `tbl_order_summery` (`OrderId`, `OrderBY`, `OrderDateTime`, `OrderQuantity`, `OrderTax`, `OrderCuponCode`, `OrderDiscount`, `OrderShipmentCharge`, `OrderTotAmount`, `OrderShipName`, `OrderShipAddressL1`, `OrderShipAddressL2`, `OrderShipAddressL3`, `OrderShipAddressL4`, `OrderLandmark`, `OrderCity`, `OrderState`, `OrderZip`, `OrderCountry`, `OrderPhone`, `OrderEmail`, `OrderNotes`, `OrderStatus`, `PaymentMode`, `OrderTentativeDate`, `OrderCancelDate`, `OrderCancelReason`) VALUES
(30, 'Saikat Bhadury', '2017-07-13 14:18:45', 1, NULL, 'BIVA2', 30, 50, 163.45, 'Saikat Bhadury', 'Guddribazer', 'Kaliyaganj', 'Uttar Dinaj Pur', 'WB', '', 'WB', 'West Bengal', 733129, 'India', '9547763990', 'saikat@visioncreative.co.in', '', 'Pending', 'cod', NULL, NULL, NULL),
(31, 'Saikat Bhadury', '2017-07-14 14:52:29', 1, NULL, 'BIVA2', 30, 50, 171, 'Saikat Bhadury', 'Guddribazer', 'Kaliyaganj', 'Uttar Dinaj Pur', 'WB', '', 'WB', 'Chandigarh', 733129, 'India', '9547763990', 'saikat@visioncreative.co.in', '', 'Pending', 'cod', NULL, NULL, NULL),
(32, 'Saikat Bhadury', '2017-07-15 08:15:28', 1, NULL, 'BIVA2', 30, 50, 171, 'Saikat Bhadury', 'Guddribazer', 'Kaliyaganj', 'Uttar Dinaj Pur', 'WB', '', 'WB', 'West Bengal', 733129, 'India', '9547763990', 'saikat@visioncreative.co.in', '', 'Pending', 'cod', NULL, NULL, NULL),
(33, 'Saikat Bhadury', '2017-07-15 09:01:19', 1, NULL, 'BIVA2', 30, 50, 171, 'Saikat Bhadury', 'Guddribazer', 'Kaliyaganj', 'Uttar Dinaj Pur', 'WB', '', 'WB', 'West Bengal', 733129, 'India', '9547763990', 'saikat@visioncreative.co.in', '', 'Pending', 'cod', NULL, NULL, NULL),
(34, 'Saikat Bhadury', '2017-07-15 09:09:25', 1, NULL, 'BIVA2', 30, 50, 171, 'Saikat Bhadury', 'Guddribazer', 'Kaliyaganj', 'Uttar Dinaj Pur', 'WB', '', 'WB', 'Lakshadweep', 733129, 'India', '9547763990', 'saikat@visioncreative.co.in', '', 'Pending', 'cod', NULL, NULL, NULL),
(35, 'Saikat Bhadury', '2017-07-15 09:28:55', 1, NULL, 'BIVA2', 30, 50, 171, 'Saikat Bhadury', 'Guddribazer', 'Kaliyaganj', 'Uttar Dinaj Pur', 'WB', '', 'WB', 'Andhra Pradesh', 733129, 'India', '9547763990', 'saikat@visioncreative.co.in', '', 'Pending', 'cod', NULL, NULL, NULL),
(36, 'Saikat Bhadury', '2017-07-15 09:50:59', 1, NULL, 'BIVA2', 30, 50, 171, 'Saikat Bhadury', 'Guddribazer', 'Kaliyaganj', 'Uttar Dinaj Pur', 'WB', '', 'WB', 'Andhra Pradesh', 733129, 'India', '9547763990', 'saikat@visioncreative.co.in', '', 'Pending', 'cod', NULL, NULL, NULL),
(37, 'Saikat Bhadury', '2017-07-15 09:53:22', 1, NULL, '', 0, 50, 188, 'Saikat Bhadury', 'Guddribazer', 'Kaliyaganj', 'Uttar Dinaj Pur', 'WB', '', 'WB', 'Arunachal Pradesh', 733129, 'India', '9547763990', 'saikat@visioncreative.co.in', '', 'Confirmed', 'cod', '2017-08-10', NULL, NULL),
(38, 'Saikat Bhadury', '2017-08-01 12:29:21', 1, NULL, '', 0, 0, 296, 'Saikat Bhadury', 'Guddribazer', 'Kaliyaganj', 'Uttar Dinaj Pur', 'WB', '', 'WB', 'West Bengal', 733129, 'India', '9547763990', 'saikat@visioncreative.co.in', '', 'Confirmed', 'cod', '2017-08-10', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_postcomment`
--

CREATE TABLE `tbl_postcomment` (
  `CommentId` int(11) NOT NULL,
  `PostId` int(11) NOT NULL,
  `CommentDate` date NOT NULL,
  `commentTime` time NOT NULL,
  `UserId` int(11) NOT NULL,
  `CommentText` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_postcomment`
--

INSERT INTO `tbl_postcomment` (`CommentId`, `PostId`, `CommentDate`, `commentTime`, `UserId`, `CommentText`) VALUES
(1, 4, '2017-07-29', '12:37:19', 7, 'Comment'),
(2, 4, '2017-07-29', '12:37:32', 7, 'Nice Comment'),
(3, 3, '2017-07-29', '12:57:56', 7, 'Nice Post...\r\nOlalalalal...\r\nGo \r\nGo\r\nGo \r\nBiva');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `ProductId` int(11) NOT NULL,
  `ProductSKU` varchar(30) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `ProductAuther` varchar(100) NOT NULL,
  `ProductStock` int(11) NOT NULL,
  `ProductRetailPrice` float NOT NULL,
  `ProductSellingPrice` float NOT NULL,
  `ProductDiscount` float NOT NULL,
  `ProductLanguage` varchar(30) NOT NULL,
  `ProdutSeries` varchar(60) DEFAULT NULL,
  `ProductPublisher` varchar(100) NOT NULL,
  `ProductISBN` varchar(100) DEFAULT NULL,
  `ProducEdition` varchar(30) NOT NULL,
  `PublishDate` date DEFAULT NULL,
  `ProductBinding` varchar(30) NOT NULL,
  `ProductPages` varchar(30) NOT NULL,
  `ProductWeight` varchar(30) DEFAULT NULL,
  `ProductThumbImage` varchar(255) NOT NULL,
  `ProductDescription` text CHARACTER SET utf8 COLLATE utf8_bin,
  `ProductLiveFlag` tinyint(1) NOT NULL,
  `ProductPDF` varchar(255) DEFAULT NULL,
  `UploadedBy` varchar(50) NOT NULL,
  `UploadDateTime` datetime NOT NULL,
  `ProductSearchKey` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`ProductId`, `ProductSKU`, `ProductName`, `ProductAuther`, `ProductStock`, `ProductRetailPrice`, `ProductSellingPrice`, `ProductDiscount`, `ProductLanguage`, `ProdutSeries`, `ProductPublisher`, `ProductISBN`, `ProducEdition`, `PublishDate`, `ProductBinding`, `ProductPages`, `ProductWeight`, `ProductThumbImage`, `ProductDescription`, `ProductLiveFlag`, `ProductPDF`, `UploadedBy`, `UploadDateTime`, `ProductSearchKey`) VALUES
(14, 'BPHBEN6ECHPB010056', '6-E Chhanda', 'Moumita Ghosh', 50, 188, 151, 20, 'Bengali', 'BIVA Prose', '1', '978-93-86548-00-9', '1', '2017-06-08', 'Paperback', '160', '500 gm', 'd357cdd8b6dfebe9769353c061d223d7.jpg', 'গল্প এগিয়েছে অমরদার এক অনন্য সাধারণ অ্যাডভেঞ্চার ডিটেকটিভ জার্নিকে কেন্দ্র করে। হ্যাঁ, অমরদা, গোয়েন্দাপ্রবর অমর রায়, এ গল্পের নায়ক। বাংলা সাহিত্যের আইকনিক গোয়েন্দা চরিত্র ফেলুদা, ব্যোমকেশ, কাকাবাবু, কর্নেল প্রমুখের মাঝে গোয়েন্দাপ্রবর অমর রায় জায়গা করে নিতে পারবে কিনা সেটা তো একমাত্র ভবিষ্যৎ-ই বলতে পারে তবে এ কথা নিঃসন্দেহে বলা যায় যে বর্তমানের ক্ষয়প্রাপ্ত বাংলা গোয়েন্দা সমাজকে ভীষণরকমভাবে নাড়া দেওয়ার সমস্ত রসদ মজুত আছে এই গোয়েন্দাপ্রবর অমর রায়-এর মধ্যে।  প্রথমে সম্পূর্ণ ভিন্ন বিক্ষিপ্ত চারটে ঘটনা দিয়ে শুরু হয় এই রহস্য উপন্যাস। ', 1, NULL, 'Admin', '2017-06-05 12:57:29', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_category`
--

CREATE TABLE `tbl_product_category` (
  `SerialNo` int(11) NOT NULL,
  `Product_Id` int(11) NOT NULL,
  `Category_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_product_category`
--

INSERT INTO `tbl_product_category` (`SerialNo`, `Product_Id`, `Category_Id`) VALUES
(23, 14, 4),
(24, 14, 2),
(25, 14, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_home`
--

CREATE TABLE `tbl_product_home` (
  `Id` int(11) NOT NULL,
  `Product_Id` int(11) NOT NULL,
  `Category_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_product_home`
--

INSERT INTO `tbl_product_home` (`Id`, `Product_Id`, `Category_Id`) VALUES
(17, 14, 3),
(18, 14, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_images`
--

CREATE TABLE `tbl_product_images` (
  `ImageID` int(11) NOT NULL,
  `ImageName` varchar(255) NOT NULL,
  `Product_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product_images`
--

INSERT INTO `tbl_product_images` (`ImageID`, `ImageName`, `Product_Id`) VALUES
(3, 'd357cdd8b6dfebe9769353c061d223d7.jpg', 14),
(4, 'download.jpg', 14),
(5, 'download1.jpg', 14);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_publishers`
--

CREATE TABLE `tbl_publishers` (
  `PublisherId` int(11) NOT NULL,
  `PublisherName` varchar(100) NOT NULL,
  `PublisherAddress` text,
  `PublisherPhone` varchar(15) NOT NULL,
  `PublisherEmail` varchar(50) NOT NULL,
  `PublisherActive` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_publishers`
--

INSERT INTO `tbl_publishers` (`PublisherId`, `PublisherName`, `PublisherAddress`, `PublisherPhone`, `PublisherEmail`, `PublisherActive`) VALUES
(1, 'Biva Publication', 'ABc Demo Street, London', '8503475945', 'biva.publication@gmail.com', 1),
(3, 'Deep Publisher', 'ACS Demo Street', '1234567897', 'deem@d.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `Id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `Title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ReviewComment` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Rate` int(11) NOT NULL,
  `ReviewDate` date DEFAULT NULL,
  `ReviewTime` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stoppers`
--

CREATE TABLE `tbl_stoppers` (
  `StoperId` int(11) NOT NULL,
  `StoperBookName` varchar(255) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `StoperBookDescription` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `StoperImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_stoppers`
--

INSERT INTO `tbl_stoppers` (`StoperId`, `StoperBookName`, `StoperBookDescription`, `StoperImage`) VALUES
(2, 'ব্রেকিং নিউজ+', '\"নেতাজি অন্তর্ধান রহস্যের নতুন কোনো মোড় নয়। রাজ্য-রাজনীতির নতুন কোনো সমীকরণও নয়। লিওলেন মেসি কলকাতার কোনো ক্লাবে সই করছেন না। টি আর পি তোলার কোনো ব্রেকিং নিউজও নয়। এক রিপোর্টাস প্যাডের বই হয়ে ওঠার কাহিনি। বোকা বাক্সের হাত ধরে দুনিয়া এখন বেডরুমে। নাবিকের ভূমিকায় সাংবাদিকেরা। কিন্তু যে খবর পৌঁছায় না আর-সবার কাছে, সাংবাদিকের সেই মনের জানলার খবরও অক্ষরবন্দি হয়েছে এই বইয়ে। সংবাদমাধ্যমের গভীরের সংবাদ থেকে সাংবাদিকের একান্ত ব্যক্তিগত খবর। যার প্রতিটি পলে- অনুপলে ছড়িয়ে আছে, জড়িয়ে আছে রোমাঞ্চ।\"', 'd-2.jpg'),
(3, 'আলেকজান্ডারের গুপ্তধন', 'মধ্যরাত্রে কলকাতার জনপথে খুন হলেন বিখ্যাত ইতিহাসবিজ্ঞানী গৌরচন্দ্র নাগ। ওদিকে জার্মানি ও ভারত মিলিয়ে একটার পর একটা মিউজিয়ামে ঘটে চলেছে রহস্যজনক চুরির ঘটনা। সত্যিই কি কোন যোগসূত্র আছে ঘটনা দুটির মধ্যে, নাকি শুধুই কাকতালীয়? আর আলেকজান্ডার? বর্তমানের পটভূমিতে কী এমন ঘটল যাতে বিখ্যাত গোয়েন্দাপ্রবর অমর রায়কে জড়িয়ে পড়তে হলো এক অদ্ভুত, অত্যাশ্চর্য রহস্যের গোলকধাঁধায়? ওদিকে কালীপ্রসন্নবাবু আবিষ্কার করলেন প্রাচীন মিশরীয় হায়ারোগ্লিফিক লিপিতে লেখা কিছু সাংকেতিক চিহ্ন। কিসের অর্থ বহন করে এসব প্রাচীন মিশরীয় লিপি?', 'd-1.jpg'),
(4, 'রুদ্ধশ্বাস সপ্তক', 'বিস্ময়ান্ত রহস্য-রোমাঞ্চ গল্পের প্রতি আমপাঠকের আকর্ষণ একটু বেশিই। রবীন্দ্রনাথ থেকে প্রেমেন্দ্র মিত্র, শরদিন্দু থেকে সত্যজিৎ -- যেমন এই আঙ্গিকের টান এড়াতে পারেননি, তেমনি একেবারে হাল-আমলের কয়েকজন গুণী লিখিয়ের মধ্যেও এই নির্মাণনৈপুণ্যটি বেঁচে রয়েছে বুক ফুলিয়ে। ‘রুদ্ধশ্বাস সপ্তক’ সেই ঘরানার এক বিরলতম উদাহরণ। সাতটি গল্পের এই সংকলন। অভাবিত অন্তিম চমক, আনকোরা নতুন প্লট ছাড়াও রয়েছে অতিলৌকিককে এক থাপ্পড়ে ভেঙে দিয়ে লৌকিকতার মাটিতে আছড়ে ফেলা। একটু বাড়াবাড়ি শোনালেও এ বইয়ের ঘরানাটি সত্যজিৎ-ঘরানার আত্মীয়।', 'd-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

CREATE TABLE `tbl_testimonial` (
  `Id` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `comment` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_testimonial`
--

INSERT INTO `tbl_testimonial` (`Id`, `day`, `comment`, `image`) VALUES
(2, 'Thu, 10 March 2016', '\"বিভা পাবলিকেশনের সযত্ন ও দৃষ্টিনন্দন ছাপা এবং আকর্ষণীয় প্রচ্ছদ যে কোনও পাঠকের নজর কাড়তে বাধ্য।\"', 'statment.png'),
(3, 'Sun, 26 June 2016', '\"বড় প্রকাশন সংস্থার পাশাপাশি ইদানীং বেশ কিছু নতুন প্রকাশক নিজস্ব চরিত্রগুণে পাঠকদের নজর কাড়ছে। বিভা পাবলিকেশন সেই নয়া প্রকাশন সংস্থার মধ্যে অন্যতম একথা বলাই যায়। পেপার ব্যাক সংস্করণ যে এত সুন্দর হতে পারে, হাতে না তুলে নিলে বিশ্বাস করা মুশকিল। প্রচ্ছদ ও অলংকরণে নতুনত্বের দাবিদার এই প্রকাশনী।\"', 'ekdin.png'),
(4, 'Wed, 2 March 2016', '\" নবীন প্রকাশনা সংস্থা বিভা পাবলিকেশন প্রকাশ করেছে এক ঝাঁক নতুন গল্প এবং কবিতার বই। সব কটি’ই পেপারব্যাক। যত্নে সাজানো। অকৃপণ মুদ্রণ। প্রকাশনাও স্বতঃস্ফূর্ত। যোগ্য সম্পাদনার এই আকালে নতুন প্রকাশকের কাছে পলির শুশ্রূষা আশা করে বাংলা বই।\"', 'Ananda1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_useraddress`
--

CREATE TABLE `tbl_useraddress` (
  `Id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address1` text NOT NULL,
  `address2` text,
  `address3` text,
  `address4` text,
  `city` varchar(50) NOT NULL,
  `pin` int(6) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_useraddress`
--

INSERT INTO `tbl_useraddress` (`Id`, `email`, `address1`, `address2`, `address3`, `address4`, `city`, `pin`, `state`, `country`) VALUES
(4, 'saikat@visioncreative.co.in', 'Guddribazer', 'Kaliyaganj', 'Uttar Dinaj Pur', 'WB', 'WB', 700052, 'West Bengal', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userdetails`
--

CREATE TABLE `tbl_userdetails` (
  `Id` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `DateofBirth` date NOT NULL,
  `Phonenumber` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `RegisterDate` date NOT NULL,
  `UniqueKey` varchar(255) DEFAULT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_userdetails`
--

INSERT INTO `tbl_userdetails` (`Id`, `Email`, `FirstName`, `LastName`, `DateofBirth`, `Phonenumber`, `Password`, `RegisterDate`, `UniqueKey`, `Status`) VALUES
(7, 'saikat@visioncreative.co.in', 'Saikat', 'Bhadury', '1995-06-16', '9547763990', 'a9d402bfcde5792a8b531b3a82669585', '2017-06-16', '206751c2f15a6ac551b5e9489a49512b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wishlist`
--

CREATE TABLE `tbl_wishlist` (
  `ListID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `UserEmail` varchar(255) NOT NULL,
  `Product_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblauthorpost`
--
ALTER TABLE `tblauthorpost`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_adminlogin`
--
ALTER TABLE `tbl_adminlogin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`BannerId`);

--
-- Indexes for table `tbl_bestseller`
--
ALTER TABLE `tbl_bestseller`
  ADD PRIMARY KEY (`SerialNo`),
  ADD KEY `tblProduct_ProductId_FK_tblBestseller` (`Product_Id`);

--
-- Indexes for table `tbl_bvpoint_data`
--
ALTER TABLE `tbl_bvpoint_data`
  ADD PRIMARY KEY (`ReferenceId`),
  ADD UNIQUE KEY `UniqueKey` (`UniqueKey`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`CategoryId`);

--
-- Indexes for table `tbl_cod`
--
ALTER TABLE `tbl_cod`
  ADD PRIMARY KEY (`LocationId`);

--
-- Indexes for table `tbl_coupon`
--
ALTER TABLE `tbl_coupon`
  ADD PRIMARY KEY (`CouponId`),
  ADD UNIQUE KEY `CouponCode` (`CouponCode`);

--
-- Indexes for table `tbl_couponimage`
--
ALTER TABLE `tbl_couponimage`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_coverbookimage`
--
ALTER TABLE `tbl_coverbookimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order_lineitems`
--
ALTER TABLE `tbl_order_lineitems`
  ADD PRIMARY KEY (`LintItemId`),
  ADD KEY `fk_tblorder_orderid_tbllineitem_orderid` (`OrdId`),
  ADD KEY `fk_tblproduct_productid_tbllineitem_ItemID` (`ItemId`);

--
-- Indexes for table `tbl_order_shipment`
--
ALTER TABLE `tbl_order_shipment`
  ADD PRIMARY KEY (`ShipmentId`),
  ADD KEY `fk_tblOrder_Orderid_tblOrderShipment_ordId` (`OrdId`);

--
-- Indexes for table `tbl_order_summery`
--
ALTER TABLE `tbl_order_summery`
  ADD PRIMARY KEY (`OrderId`);

--
-- Indexes for table `tbl_postcomment`
--
ALTER TABLE `tbl_postcomment`
  ADD PRIMARY KEY (`CommentId`),
  ADD KEY `PostId` (`PostId`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`ProductId`);

--
-- Indexes for table `tbl_product_category`
--
ALTER TABLE `tbl_product_category`
  ADD PRIMARY KEY (`SerialNo`),
  ADD KEY `fk_tblProduct` (`Product_Id`),
  ADD KEY `fk_tlCategory` (`Category_Id`);

--
-- Indexes for table `tbl_product_home`
--
ALTER TABLE `tbl_product_home`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `tblProductHome_poductId_fk` (`Product_Id`),
  ADD KEY `tblProductHome_categoryid_fk` (`Category_Id`);

--
-- Indexes for table `tbl_product_images`
--
ALTER TABLE `tbl_product_images`
  ADD PRIMARY KEY (`ImageID`),
  ADD KEY `tblProduct_ProductId_FK` (`Product_Id`);

--
-- Indexes for table `tbl_publishers`
--
ALTER TABLE `tbl_publishers`
  ADD PRIMARY KEY (`PublisherId`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_tbluserdetails_Id_tblreview_UserId` (`UserId`),
  ADD KEY `Fk_tblreview_ProductID_tblProducts_ProductID` (`ProductId`);

--
-- Indexes for table `tbl_stoppers`
--
ALTER TABLE `tbl_stoppers`
  ADD PRIMARY KEY (`StoperId`);

--
-- Indexes for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_useraddress`
--
ALTER TABLE `tbl_useraddress`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_userdetails`
--
ALTER TABLE `tbl_userdetails`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  ADD PRIMARY KEY (`ListID`),
  ADD KEY `FK_tbluserdetails_Id` (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblauthorpost`
--
ALTER TABLE `tblauthorpost`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_adminlogin`
--
ALTER TABLE `tbl_adminlogin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `BannerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_bestseller`
--
ALTER TABLE `tbl_bestseller`
  MODIFY `SerialNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_bvpoint_data`
--
ALTER TABLE `tbl_bvpoint_data`
  MODIFY `ReferenceId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `CategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_cod`
--
ALTER TABLE `tbl_cod`
  MODIFY `LocationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_coupon`
--
ALTER TABLE `tbl_coupon`
  MODIFY `CouponId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_couponimage`
--
ALTER TABLE `tbl_couponimage`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_coverbookimage`
--
ALTER TABLE `tbl_coverbookimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_order_lineitems`
--
ALTER TABLE `tbl_order_lineitems`
  MODIFY `LintItemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `tbl_order_shipment`
--
ALTER TABLE `tbl_order_shipment`
  MODIFY `ShipmentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_order_summery`
--
ALTER TABLE `tbl_order_summery`
  MODIFY `OrderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `tbl_postcomment`
--
ALTER TABLE `tbl_postcomment`
  MODIFY `CommentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `ProductId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_product_category`
--
ALTER TABLE `tbl_product_category`
  MODIFY `SerialNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_product_home`
--
ALTER TABLE `tbl_product_home`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_product_images`
--
ALTER TABLE `tbl_product_images`
  MODIFY `ImageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_publishers`
--
ALTER TABLE `tbl_publishers`
  MODIFY `PublisherId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_stoppers`
--
ALTER TABLE `tbl_stoppers`
  MODIFY `StoperId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_useraddress`
--
ALTER TABLE `tbl_useraddress`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_userdetails`
--
ALTER TABLE `tbl_userdetails`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  MODIFY `ListID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_bestseller`
--
ALTER TABLE `tbl_bestseller`
  ADD CONSTRAINT `tblProduct_ProductId_FK_tblBestseller` FOREIGN KEY (`Product_Id`) REFERENCES `tbl_products` (`ProductId`);

--
-- Constraints for table `tbl_order_lineitems`
--
ALTER TABLE `tbl_order_lineitems`
  ADD CONSTRAINT `fk_tblorder_orderid_tbllineitem_orderid` FOREIGN KEY (`OrdId`) REFERENCES `tbl_order_summery` (`OrderId`),
  ADD CONSTRAINT `fk_tblproduct_productid_tbllineitem_ItemID` FOREIGN KEY (`ItemId`) REFERENCES `tbl_products` (`ProductId`);

--
-- Constraints for table `tbl_order_shipment`
--
ALTER TABLE `tbl_order_shipment`
  ADD CONSTRAINT `fk_tblOrder_Orderid_tblOrderShipment_ordId` FOREIGN KEY (`OrdId`) REFERENCES `tbl_order_summery` (`OrderId`);

--
-- Constraints for table `tbl_postcomment`
--
ALTER TABLE `tbl_postcomment`
  ADD CONSTRAINT `tbl_postcomment_ibfk_1` FOREIGN KEY (`PostId`) REFERENCES `tblauthorpost` (`Id`),
  ADD CONSTRAINT `tbl_postcomment_ibfk_2` FOREIGN KEY (`UserId`) REFERENCES `tbl_userdetails` (`Id`);

--
-- Constraints for table `tbl_product_category`
--
ALTER TABLE `tbl_product_category`
  ADD CONSTRAINT `fk_tblProduct` FOREIGN KEY (`Product_Id`) REFERENCES `tbl_products` (`ProductId`),
  ADD CONSTRAINT `fk_tlCategory` FOREIGN KEY (`Category_Id`) REFERENCES `tbl_category` (`CategoryId`);

--
-- Constraints for table `tbl_product_home`
--
ALTER TABLE `tbl_product_home`
  ADD CONSTRAINT `tblProductHome_categoryid_fk` FOREIGN KEY (`Category_Id`) REFERENCES `tbl_category` (`CategoryId`),
  ADD CONSTRAINT `tblProductHome_poductId_fk` FOREIGN KEY (`Product_Id`) REFERENCES `tbl_products` (`ProductId`);

--
-- Constraints for table `tbl_product_images`
--
ALTER TABLE `tbl_product_images`
  ADD CONSTRAINT `tblProduct_ProductId_FK` FOREIGN KEY (`Product_Id`) REFERENCES `tbl_products` (`ProductId`);

--
-- Constraints for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD CONSTRAINT `FK_tbluserdetails_Id_tblreview_UserId` FOREIGN KEY (`UserId`) REFERENCES `tbl_userdetails` (`Id`),
  ADD CONSTRAINT `Fk_tblreview_ProductID_tblProducts_ProductID` FOREIGN KEY (`ProductId`) REFERENCES `tbl_products` (`ProductId`);

--
-- Constraints for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  ADD CONSTRAINT `FK_tbluserdetails_Id` FOREIGN KEY (`UserID`) REFERENCES `tbl_userdetails` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
