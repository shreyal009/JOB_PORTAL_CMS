SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


CREATE TABLE IF NOT EXISTS `application_master` (`ApplicationId` int(11) NOT NULL AUTO_INCREMENT, `JobSeekId` int(11) NOT NULL, `JobId` int(11) NOT NULL,  `Status` varchar(30) NOT NULL, `Description` varchar(200) NOT NULL, PRIMARY KEY (`ApplicationId`)) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;


INSERT INTO `application_master` (`ApplicationId`, `JobSeekId`, `JobId`, `Status`, `Description`) VALUES(1, 1, 1, 'Application Sent', 'Invited on 25-Aug-2016.'),(2, 2, 2, 'Application Request Sent', 'You are Invited For Interview on 30-Aug-2016.'),(3, 3, 3, 'Application Request Sent', 'Invited on 21-Sep-2016.'),(4, 3, 4, 'Call Letter Sent', 'Invited on 05-Dec-2016.');


CREATE TABLE IF NOT EXISTS `employer_reg` (`EmployerId` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(20) NOT NULL,
  `ContactPerson` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Area_Work` varchar(40) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Answer` varchar(50) NOT NULL,
  PRIMARY KEY (`EmployerId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;



INSERT INTO `employer_reg` (`EmployerId`, `CompanyName`, `ContactPerson`, `Address`, `City`, `Email`, `Mobile`, `Area_Work`, `Status`, `UserName`, `Password`, `Question`, `Answer`) VALUES
(1, 'TCS Private Limited', 'Mr. Mohan Shah', 'Hinjewadi', 'Pune', 'mohan@gmail.com', 9898989898, 'Software', 'Confirm', 'mohan', '$P$B5KnVPzTh9F7QoxJMg8EkoeOWJktqu1', 'Who is Your Favourite Person?', 'sachin'),
(2, 'Solusoft  Pvt Limite', 'Mr. Nirav Soni', 'Hinjewadi', 'Pune', 'nirav@gmail.com', 9898989898, 'Software', 'Confirm', 'nirav', '$P$B3EleINUKFxpBcYDhAaQXAxgPWV3Em.', 'What is Your Pet Name?', 'niru'),
(3, 'Info Matrics', 'Mr. Narayan', 'Magarpatta City', 'Pune', 'narayan@yahoo.com', 6767676767, 'Software', 'Pending', 'narayan', '$P$BCVdkD9gTgbGrZ/XmaiEBGSZqQAJ0s1', 'What is Your Pet Name?', 'nari');


CREATE TABLE IF NOT EXISTS `feedback` (
  `FeedbackId` int(11) NOT NULL AUTO_INCREMENT,
  `JobSeekId` int(11) NOT NULL,
  `Feedback` varchar(200) NOT NULL,
  `FeedbakDate` date NOT NULL,
  PRIMARY KEY (`FeedbackId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;


INSERT INTO `feedback` (`FeedbackId`, `JobSeekId`, `Feedback`, `FeedbakDate`) VALUES
(1, 1, 'Execellent Website', '2016-08-24'),
(2, 3, 'Nice Service', '2016-08-23'),
(3, 4, 'Thanks For Your Support.', '2016-08-18');


CREATE TABLE IF NOT EXISTS `jobseeker_education` (
  `EduId` int(11) NOT NULL AUTO_INCREMENT,
  `JobSeekId` int(11) NOT NULL,
  `Degree` varchar(20) NOT NULL,
  `University` varchar(100) NOT NULL,
  `PassingYear` mediumint(9) NOT NULL,
  `Percentage` float NOT NULL,
  PRIMARY KEY (`EduId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


INSERT INTO `jobseeker_education` (`EduId`, `JobSeekId`, `Degree`, `University`, `PassingYear`, `Percentage`) VALUES
(3, 3, 'B.C.A', 'Pune Universiy', 2014, 68.89),
(4, 3, 'M.C.A', 'SIU University', 2015, 89.9),
(5, 3, 'S.S.C', 'Pune University',2012, 80);


CREATE TABLE IF NOT EXISTS `jobseeker_reg` (
  `JobSeekId` int(11) NOT NULL AUTO_INCREMENT,
  `JobSeekerName` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Qualification` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `BirthDate` date NOT NULL,
  `Resume` varchar(200) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `UserName` varchar(20) NOT NULL UNIQUE,
  `Password` varchar(150) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Answer` varchar(50) NOT NULL,
  PRIMARY KEY (`JobSeekId`),
  KEY `JobSeekId` (`JobSeekId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;


INSERT INTO `jobseeker_reg` (`JobSeekId`, `JobSeekerName`, `Address`, `City`, `Email`, `Mobile`, `Qualification`, `Gender`, `BirthDate`, `Resume`, `Status`, `UserName`, `Password`, `Question`, `Answer`) VALUES
(3, 'Rupesh Gangwani', 'Pancard Club Road', 'Pune', 'rupesh2192@gmail.com', 9898989898, 'M.C.A', 'Male', '1992-03-21', 'Marksheet.pdf', 'Confirm', 'rupesh', '$P$BjKZYLW3W.gpa1IQKNsH.W2bjpSEDw0', 'What is Your Pet Name?', 'rupesh'),
(4, 'Shreyal Mandot', 'Aundh', 'Pune', 'shreyal@gmail.com', 8989898989, 'M.B.A', 'Male', '1994-09-16', 'Marksheet.pdf', 'Confirm', 'shreyal', '$P$BlWci1kIL7zvDiLPbXtSa1rtEKrq.T.', '', ''),
(5, 'Gopal Patel', 'Patan', 'Patan', 'gopal@gmail.com', 9898989898, 'MA', 'Male', '2013-10-15', 'admin.jpg', 'Confirm', 'gopal', 'gopal', '', ''),
(6, 'Mehul Mistry', 'Swastik SOciety', 'Baroda', 'mehul@gmail.com', 8989898998, 'BE', 'Male', '2013-10-09', '470X310_1.jpg', 'Confirm', 'mehul', '$P$BtGuwp1PjJAsK6MyVuISULftVG14Pl/', 'What is Your Pet Name?', 'mehu');


CREATE TABLE IF NOT EXISTS `job_master` (
  `JobId` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(20) NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `Vacancy` int(11) NOT NULL,
  `MinQualification` varchar(50) NOT NULL,
  `Description` varchar(200) NOT NULL,
  PRIMARY KEY (`JobId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;


INSERT INTO `job_master` (`JobId`, `CompanyName`, `JobTitle`, `Vacancy`, `MinQualification`, `Description`) VALUES
(1, 'Wipro Infotech', 'Software Professional Required', 2, 'M.C.A', 'ASP.NET'),
(2, 'Wipro Infotech', 'Marketing Executive Required', 5, 'M.B.A', 'Freshers Are Invited'),
(3, 'TCS Private Limited', 'Software Trainee Required', 1, 'B.Sc.I.T', 'Starting Salary 5000'),
(4, 'Wipro Infotech', 'Cleaners Required', 3, 'S.S.C', 'N');


CREATE TABLE IF NOT EXISTS `news_master` (
  `NewsId` int(11) NOT NULL AUTO_INCREMENT,
  `News` varchar(200) NOT NULL,
  `NewsDate` date NOT NULL,
  PRIMARY KEY (`NewsId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;


INSERT INTO `news_master` (`NewsId`, `News`, `NewsDate`) VALUES
(1, 'Register and Get JOB', '2016-08-24'),
(2, 'New Vacancies will be updated after diwali', '2016-08-20');


CREATE TABLE IF NOT EXISTS `user_master` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(20) NOT NULL UNIQUE,
  `Password` varchar(150) NOT NULL,
  `UserLevel` int(2) NOT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;


CREATE TABLE IF NOT EXISTS `walkin_master` (
  `WalkInId` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(20) NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `Vacancy` int(11) NOT NULL,
  `MinQualification` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `InterviewDate` date NOT NULL,
  `InterviewTime` time NOT NULL,
  PRIMARY KEY (`WalkInId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;


INSERT INTO `walkin_master` (`WalkInId`, `CompanyName`, `JobTitle`, `Vacancy`, `MinQualification`, `Description`, `InterviewDate`, `InterviewTime`) VALUES
(1, 'Wipro Infotech', 'Freshers Required', 5, 'B.C.A', 'Hardworking Person are Required.', '2016-09-25', '09:00:00'),
(2, 'TCS Private Limited', 'Marketive Representative Invited', 2, 'Pharmacist', 'Ready TO work in North Gujarat', '2016-08-30', '09:00:00');


CREATE TABLE IF NOT EXISTS `qualification_master`(`qual_id` int(5) PRIMARY KEY AUTO_INCREMENT,`qual_name` VARCHAR(100));


INSERT INTO `qualification_master` (`qual_name`) VALUES('B.C.A'),('M.C.A'),('B.B.A'),('M.B.A'),('BTech'),('MTech'),('CS');
