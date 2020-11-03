-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 02, 2020 at 02:22 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoesshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(8) NOT NULL,
  `aname` varchar(100) NOT NULL,
  `auser` varchar(100) NOT NULL,
  `apwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=tis620;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `auser`, `apwd`) VALUES
(1, 'ปิยะมาศ', 'admin1', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'ภัคจิรา', 'admin2', '6562c5c1f33db6e05a082a88cddab5ea');

-- --------------------------------------------------------

--
-- Table structure for table `clear`
--

CREATE TABLE `clear` (
  `c_id` int(10) NOT NULL,
  `c_img` int(20) NOT NULL,
  `c_name` varchar(200) NOT NULL,
  `c_price` int(100) NOT NULL,
  `c_number` int(250) NOT NULL,
  `c_netprice` int(250) NOT NULL,
  `pt_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=tis620;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `o_id` int(100) NOT NULL,
  `c_id` int(100) NOT NULL,
  `o_total` varchar(100) NOT NULL,
  `o_date` date NOT NULL,
  `o_member` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=tis620;

-- --------------------------------------------------------

--
-- Table structure for table `pdfemale`
--

CREATE TABLE `pdfemale` (
  `fm_id` int(10) NOT NULL,
  `fm_name` varchar(250) NOT NULL,
  `fm_color` varchar(250) NOT NULL,
  `fm_brand` varchar(250) NOT NULL,
  `fm_detail` text NOT NULL,
  `fm_price` varchar(20) NOT NULL,
  `fm_img` varchar(100) NOT NULL,
  `pt_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=tis620;

--
-- Dumping data for table `pdfemale`
--

INSERT INTO `pdfemale` (`fm_id`, `fm_name`, `fm_color`, `fm_brand`, `fm_detail`, `fm_price`, `fm_img`, `pt_id`) VALUES
(1, 'FILA WFA20329', 'ขาว', '1', 'อัปเปอร์เป็นผ้าตาข่าย นุ่มรอบข้อเท้าและลิ้นรองเท้า พื้นรองเท้าเป็นโฟมที่มีน้ำหนักเบาและนุ่มเท้า พื้นรองเท้าด้านนอกยึดเกาะได้ดี\r\n', '1,990', '1001.jpg', 2),
(2, 'NIKE Zoom Fly 3 ', 'ชมพู', '2', 'อัปเปอร์แบบ Vaporweave เทคโนโลยี React ทำให้รองเท้ามีน้ำหนักเบา ทนทาน และตอบสนองอย่างมีประสิทธิภาพ คาร์บอนไฟเบอร์ที่พื้นรองเท้าเสริมความยืดหยุ่นในแต่ละก้าว พื้นรองเท้าด้านนอกเป็นยางที่ทนทานต่อการขีดข่วนและยึดเกาะได้ดี\r\n', '4,269', '1002.jpg', 2),
(3, 'NIKE ', 'Phantom/Black/Amber Rise', '2', 'อัปเปอร์เป็นหนังสังเคราะห์และผ้าตาข่ายเทคโนโลยี Air Max ช่วยให้รองเท้ามีน้ำหนักเบาและนุ่มสบาย พื้นรองเท้าด้านนอกยึดเกาะอย่างยืดหยุ่น\r\n', '3,500', '1003.jpg', 2),
(4, 'CONVERSE Jack Purcell', 'ขาว', '3', 'อัปเปอร์ผ้า Twill คุณภาพดี นุ่มใส่สบาย ระบายอากาศได้ดี ให้เท้าเย็นสบายตลอดวัน แผ่นรองเท้า OrthoLite ช่วยดูดซับความชื้นเสริมความสบายเท้า พื้นรองเท้าชั้นนอกเป็นยางสไตล์ Herringbone  ทนทานสูง ยึดเกาะพื้นได้มั่นคง \r\n', '2,600', '1004.jpg', 2),
(5, 'ADIDAS', 'สีดำ/เทา ', '4', 'อัปเปอร์เป็นผ้าตาข่ายระบายอากาศได้ดี\r\nพื้นรองเท้ามี Cloudfoam ช่วยรองรับแรงกระแทก\r\nพื้นรองเท้าด้านนอกเป็นยางที่ทนทานและยึดเกาะได้ดี รองเท้าวิ่ง Adidas\r\n', '2,500', '1005.jpg', 2),
(6, 'FILA', 'สีขาว/เบจ/ชมพู', '1', 'อัปเปอร์เป็นหนังสังเคราะห์ สายตีนตุ๊กแกเพิ่มความกระชับเท้าพื้นรองเท้านุ่มสบาย พื้นรองเท้าด้านนอกทำจาก TPR สังเคราะห์ มีน้ำหนักเบาแต่ยึดเกาะได้ดี\r\n', '2,700', '1006.jpg', 2),
(7, 'SKECHERS', 'สีเทา/ขาว', '5', 'อัปเปอร์เป็นผ้าถัก กระชับตามรูปเท้า\r\nเทคโนโลยี Air Cooled Goga Mat มอบความนุ่มสบายและตอบสนองในทุกก้าว พื้นรองเท้าด้านนอกยึดเกาะได้ดีในทุกทิศทาง\r\n', '2,800', '1007.jpg', 2),
(8, 'ADIDAS', 'Active Maroon/Cloud White/Blue Tint', '4', 'อัปเปอร์ทำจากผ้าที่มีน้ำหนักเบา แผ่นรองพื้นรองเท้า OrthoLite? Float ให้การรองรับฝ่าเท้าที่เบาสบาย ส่วนข้อเท้าทรง sock-like ช่วยโอบกระชับเท้าเหมือนสวมถุงเท้า พื้นรองเท้าชั้นกลางและชั้นนอกเป็น Cloudfoam แบบขึ้นรูปเป็นชิ้นเดียวกัน ช่วยรองรับแรงกระแทกด้วยสัมผัสที่นุ่มสบาย\r\n', '2,700', '1008.jpg', 2),
(9, 'SKECHERS', 'เหลือง', '5', 'อัปเปอร์ผ้าตาข่ายถักที่ให้การระบายอากาศพร้อมยืดขยายตามรูปเท้าได้ดี บุนุ่มรอบข้อเท้าเพิ่มความสบายขณะสวมใส่ แผ่นรองพื้นรองเท้ามีเทคโนโลยี Air Cooled Goga Mat? ช่วยเด้งรับแรงกระแทกและระบายกลิ่นอับได้ดี พื้นรองเท้าส่วนนอกมีความมีความหนาแน่นสองชั้น และมีความยืดหยุ่นสูงให้การยึดเกาะได้ดีทุกสภาพพื้นผิว ทรง Slip on สวมใส่ง่าย\r\n ', '990', '1009.jpg', 2),
(10, 'SKECHERS', 'ชมพูอ่อน', '5', 'อัปเปอร์เป็นผ้าตาข่าย บุนุ่มรอบข้อเท้าและลิ้นรองเท้า เทคโนโลยี Air Cooled Memory Foam มอบความนุ่มเท้า พื้นรองเท้าด้านนอกเป็นยางที่ยึดเกาะอย่างยืดหยุ่น\r\n', '2,600', '1010.jpg', 2),
(11, 'MERRELL ', 'Grey/Turquoise', '6', 'อัปเปอร์ทำจากวัสดุสังเคราะห์และผ้าตาข่ายเพื่อการระบายอากาศและมีความทนทาน ดีไซน์เชือกผูกเพิ่มความรัดกระชับรูปเท้า เสริมวัสดุสังเคราะห์เพื่อป้องกันนิ้วเท้า แผ่นรองพื้นรองเท้าแบบถอดได้ พื้นรองเท้าทำจากโฟม EVA ช่วยดูดซับแรงกระแทกอย่างนุ่มสบายและมั่นคง พื้นรองเท้ายาง Vibram? ให้การยึดเกาะที่มั่นคงและมีความทนทานสูง\r\n', '2,500', '1011.jpg', 2),
(12, 'BROOKS', 'สีเทา/ม่วง', '7', 'อัปเปอร์ผ้าตาข่ายให้ความกระชับตามรูปเท้าและระบายอากาศได้ดี\r\nเสริมโครงสร้างอัปเปอร์ด้วยดีเทลแบบสามมิติเพิ่มความกระชับ\r\nเทคโนโลยี GuideRails ช่วยซัพพอร์ตการเคลื่อนไหวและการลงน้ำหนักเท้าได้อย่างนุ่มนวลและเหมาะสม\r\nพื้นรองเท้าชั้นกลาง DNA LOFT แบบเต็มฝ่าเท้าช่วยรองรับแรงกระแทกใต้ฝ่าเท้า\r\nCrash Pad ช่วยซัพพอร์ตและสร้างการเปลี่ยนจังหวะก้าวตั้งแต่ปลายเท้าจนถึงส้นเท้าได้อย่างนุ่มนวล\r\nพื้นรองเท้ายางชั้นนอกช่วยยึดเกาะพื้นผิวและมีความทนทานสูง\r\n', '3,920', '1012.jpg', 2),
(13, 'ECCO', 'Retro Blue', '8', 'อัปเปอร์ทำจากหนังจามรี มีผิวสัมผัสนุ่มเรียบเนียนและทนทานต่อสภาพอากาศ แพทเทิร์นอัปเปอร์แบบไดมอนทำให้มีน้ำหนักเบาและระบายอากาศได้ดี เสริมหนังเทียมบริเวณส้นเท้าเพิ่มความกระชับมั่นคงขณะวางเท้า\r\nเทคโนโลยีโฟม FLUIDFORM? ช่วยดูดซับแรงกระแทกอย่างนุ่มสบาย พื้นรองเท้า E-DTS? LIGHT มีความยืดหยุ่นน้ำหนักเบาและแข็งแรงทนทาน\r\n', '7,900', '1013.jpg', 2),
(14, 'CONVERSE', 'ขาว', '3', 'รองเท้าผ้าใบลำลอง CONVERSE ดีไซน์เรียบง่าย\r\nอัปเปอร์ตัดเย็บจากผ้าแคนวาสมีความทนทานสูง\r\nสไตล์ผูกเชือกปรับกระชับได้ พื้นรองเท้าด้านในทำจากโฟม OrthoLite ช่วยซัพพอร์ตเท้าและลดกลิ่นอับชื้น รองรับแรงกระแทกได้ดีพร้อมมอบความนุ่มเบาสบายตลอดการสวมใส่ ครึ่งหลังของรองเท้าทำจากหนังโทนสีสันสดใส เย็บเชื่อมกับส่วนหน้าที่เป็นผ้าแคนวาส\r\nเย็บตะเข็บและมีซับในบริเวณลิ้นรองเท้าช่วยเพิ่มความนุ่มสบายขณะสวมใส่\r\n', '2,700', '1014.jpg', 2),
(15, 'LACOSTE', 'ขาว', '9', 'อัปเปอร์ทำจากหนังและหนังสังเคราะห์คุณภาพดี\nปักโลโก้จระเข้ของแบรนด์ที่ด้านข้าง \nซับในด้วยผ้าทอเสริมความสบาย\nพื้นรองเท้าชั้นนอกทำจากยางที่ให้การยึดเกาะได้ดี\n', '3,250', '1015.jpg', 2),
(16, 'NEW BALANCE 327', 'สีดำ/เทา/ขาว', '10', 'อัปเปอร์ทำจากหนังและไนล่อน\nพื้นรองเท้ามีน้ำหนักเบาและนุ่มสบาย\nพื้นรองเท้าด้านนอกเป็นยางที่ทนทาน แต่งปุ่มเสริมการยึดเกาะ\nสนีกเกอร์ New Balance\n', '3,290', '1016.jpg', 2),
(17, 'ADIDAS ORIGINALS NMD R1 ', 'Ftwr White/Core Black/Orbit Grey', '4', 'ทรงเพรียวกระชับกับรูปเท้า\nอัปเปอร์ผลิตจากผ้ามีความยืดหยุ่น\nพื้นรองเท้าชั้นกลางผลิตจากโฟม BOOST คงประสิทธิภาพได้ดีกว่า EVA มีความนุ่มและรองรับแรงกระแทกได้เป็นอย่างดี\nพื้นรองเท้าด้านนอกผลิตจากยางลวดลายพิเศษ สามารถยึดเกาะพื้นผิวได้ดี\nตกแต่งด้วยลายพิมพ์ยางสามมิติและประโยค \"The Brand with the 3-Stripes\" ใน 3 ภาษาบริเวณพื้นรองเท้าด้านล่าง\n', '4,600', '0001.jpg', 1),
(18, 'SKECHERS Delson 2.0 - Weslo', 'ดำ', '5', 'อัปเปอร์แบบผ้าถัก เทคโนโลยี Air Cooled Memory Foam มอบความนุ่มเท้า นวัตกรรม Goga Mat Arch? ที่พื้นรองเท้าส่วนกลางช่วยรองรับแรงกระแทก พื้นรองเท้าด้านนอกยึดเกาะอย่างยืดหยุ่น\n', '2,990', '0002.jpg', 1),
(19, 'ADIDAS Adizero RC 2.0 ', 'สีดำ/ขาว/ส้ม', '4', 'อัปเปอร์ Celermesh\nบุนุ่มรอบข้อเท้าและลิ้นรองเท้า\nโฟม Bounce ที่พื้นรองเท้าซัพพอร์ตความนุ่มสบายและยืดหยุ่น\nพื้นรองเท้าด้านนอกทำจากยาง Continental? ที่ทนทานและยึดเกาะได้ดี\n', '4,600', '0003.jpg', 1),
(20, 'FILA Blazehawk', 'สีดำ/เหลือง', '1', 'รองเท้าวิ่ง FILA ได้รับการออกแบบมาให้สามารถสวมใส่วิ่งออกกำลังกายได้ทุกวัน อัปเปอร์ตัดเย็บจากผ้าถักน้ำหนักเบาระบายอากาศได้ดี\nพื้นรองเท้าส่วนนอกทำจากยางมีความยืดหยุ่นสูงช่วยยึดเกาะพื้นผิวได้ดีพื้นรองเท้าด้านในและส่วนกลางนุ่มพิเศษช่วยซัพพอร์ตเท้าและดูดซับแรงกระแทก พร้อมมอบความนุ่มสบายอย่างสูงสุดตลอดการสวมใส่วิ่ง นุ่มรอบข้อเท้าและลิ้นรองเท้าช่วยเพิ่มความนุ่มพิเศษขณะสวมใส่\n', '1,790', '0004.jpg', 1),
(21, 'NIKE Air Zoom Pegasus 37', 'เทา', '2', 'อัปเปอร์เป็นผ้าตาข่ายและวัสดุโปร่งแสง\nเทคโนโลยี React ทำให้รองเท้ามีน้ำหนักเบา ตอบสนองอย่างยืดหยุ่นและทนทาน\nขยายโฟม Air Zoom เพื่อเสริมความยืดหยุ่นในทุกก้าว\n\nพื้นรองเท้าด้านนอกเป็นยางที่ยึดเกาะได้ดี\n', '4,600', '0005.jpg', 1),
(22, 'ADIDAS SL20', 'สีดำ/เทา', '4', 'อัปเปอร์ทำจากผ้าตาข่าย นุ่มรอบข้อเท้าและลิ้นรองเท้า\nเทคโนโลยี Lightstrike ช่วยรองรับแรงกระแทก\nพื้นรองเท้าทำจากยาง Continental? ทนทานสูงและยึดเกาะได้ดี\n', '4,000', '0006.jpg', 1),
(23, 'S Sports Boom ', 'น้ำเงิน', '11', 'อัปเปอร์ทำจากผ้าตาข่ายน้ำหนักเบาและระบายอากาศได้ดี\nแต่งด้วย PU เสริมความแข็งแรงทนทาน\nบุภายในด้วยผ้าตาข่ายเพิ่มความนุ่มสบายขณะสวมใส่\nแผ่นรองเท้าทำจากโฟม EVA ช่วยรองรับแรงกระแทกอย่างนุ่มสบาย\n', '1,295', '0007.jpg', 1),
(24, 'ADIDAS Court 80s', 'Ftwr White/Core Black/Orbit Grey', '4', 'อัปเปอร์ตัดเย็บจากหนังโพลียูรีเทนผิวเรียบมีความทนทานสูงที่ให้ลุคดูสะอาดตาและดีไซน์ที่เรียบง่าย พื้นชั้นล่างทำจากหนังสังเคราะห์ มีส่วนประกอบของยางโพลียูรีเทน ช่วยในการยึดเกาะได้ดี แผ่นรองพื้นรองเท้าแบบ OrthoLite? ช่วยจัดการความชื้นและลดกลิ่นอับในรองเท้า เจาะรูระบายอากาศขนาดเล็กที่อัปเปอร์บริเวณตรงปลายเท้าเพื่อช่วยเพิ่มการระบายอากาศ ซับในรองเท้าด้วยผ้าช่วยเพิ่มความนุ่มสบายตลอดการสวมใส่\n\n', '2,790', '0008.jpg', 1),
(25, 'SKECHERS Gorun Mojo 2.0 - Endurable', 'สีกลม/เทา', '5', 'เทคโนโลยี Air Cooled Goga Mat? ช่วยรองรับแรงกระแทกอย่างมีประสิทธิภาพ นวัตกรรม 5GEN? เสริมการตอบสนองให้ยืดหยุ่นขึ้น เซ็นเซอร์ GOimpulse เพิ่มสัมผัสใกล้ชิดพื้นดินเพื่อการวิ่งที่เป็นธรรมชาติ พื้นรองเท้าด้านนอกยึดเกาะได้ดี\n', '3,200', '0009.jpg', 1),
(26, 'NIKE', 'ขาว', '2', 'อัปเปอร์แบบ Flyknit ระบายอากาศได้ดีและทนทานสูง\nเลเยอร์ 3 ชั้นเพื่อล็อคกระชับเท้าเทคโนโลยี React ช่วยรองรับแรงกระแทกและส่งคืนพลังกลับพื้นรองเท้าด้านนอกทำจากยางที่ยึดเกาะอย่างยอดเยี่ยมและนุ่มนวล\n', '5,600', '0010.jpg', 1),
(27, 'SKECHERS', 'เทา/ฟ้า', '5', 'อัปเปอร์เป็นตาข่ายบุนุ่มรอบข้อเท้าและลิ้นรองเท้าเทคโนโลยี Air Cooled Goga Mat? มอบความนุ่มสบายในทุกก้าวเทคโนโลยี ULTRA GO ทำให้รองเท้ามีน้ำหนักเบาและตอบสนองได้ดีพื้นรองเท้าด้านนอกยึดเกาะทุกพื้นผิว\n', '3,790', '0011.jpg', 1),
(29, 'ADIDAS', 'Tech Indigo/Grey Six/Legend Ink', '4', 'รองเท้าผ้าใบลำลอง ADIDAS สไตล์สปอร์ตที่ได้รับแรงบันดาลมาจากรองเท้าวิ่งในยุค 90 อัปเปอร์ตัดเย็บจากผ้าตาข่ายน้ำหนักเบาระบายอากาศได้ดี แต่งหนังสังเคราะห์ หนังกลับ และหนังนูบัคช่วยเพิ่มความทนทาน\nพื้นรองเท้าด้านในแบบ OrthoLite? ช่วยมอบความนุ่มสบายและลดกลิ่นอับชื้นภายในรองเท้า\n', '2,200', '0012.jpg', 1),
(30, 'NIKE', 'ดำ/ขาว', '2', 'อัปเปอร์เป็นผ้าตาข่ายโปร่งแสง นุ่มรอบข้อเท้าและลิ้นรองเท้า\nพื้นรองเท้ารองรับการก้าวเดินด้วยโฟมนุ่ม\nพื้นรองเท้าด้านนอกเสริมยางเพื่อการยึดเกาะ\n', '3,100', '0013.jpg', 1),
(31, 'NEW BALANCE', 'ขาว/กรมท่า/แดง', '10\n', 'อัปเปอร์ทำจากหนังและไนล่อนพื้นรองเท้ามีน้ำหนักเบาและนุ่มสบายพื้นรองเท้าด้านนอกเป็นยางที่ทนทาน แต่งปุ่มเสริมการยึดเกาะ สนีกเกอร์ New Balance\n', '3,490', '0014.jpg', 1),
(32, 'NIKE', 'ขาว/น้ำเงิน/แดง\n', '2', 'อัปเปอร์ทำจากผ้าและวัสดุสังเคราะห์ที่มีความเบาและทนทานแต่งโลโก้ \"NKE 72\" และการเย็บซิกแซกแบบแฟชั่นพื้นโฟมชั้นกลางแบบหนาให้ความนุ่มสบายพื้นรองเท้ายางชั้นนอกลายวาฟเฟิลให้การยึดเกาะได้หลายพื้นผิวสนีกเกอร์ NIKE\n', '2,900', '0015.jpg', 1),
(33, 'NEW BALANCE', 'เทา', '10', 'อัปเปอร์ทำจากหนังและไนล่อนพื้นรองเท้ามีน้ำหนักเบาและนุ่มสบายพื้นรองเท้าด้านนอกเป็นยางที่ทนทาน แต่งปุ่มเสริมการยึดเกาะ\n\n', '3,200', '0016.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `pt_id` int(11) NOT NULL,
  `pt_name` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`pt_id`, `pt_name`) VALUES
(1, 'ชาย'),
(2, 'หญิง');

-- --------------------------------------------------------

--
-- Table structure for table `p_brand`
--

CREATE TABLE `p_brand` (
  `pd_id` int(10) NOT NULL,
  `pd_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=tis620;

--
-- Dumping data for table `p_brand`
--

INSERT INTO `p_brand` (`pd_id`, `pd_name`) VALUES
(1, 'FILA'),
(2, 'NIKE'),
(3, 'CONVERSE'),
(4, 'ADIDAS'),
(5, 'SKECHERS'),
(6, 'MERRELL'),
(7, 'BROOKS'),
(8, 'ECCO'),
(9, 'LACOSTE'),
(10, 'NEWBALANCE'),
(11, 'SportsBoom'),
(12, 'UMBRO');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(8) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `uuser` varchar(100) NOT NULL,
  `upwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=tis620;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `uuser`, `upwd`) VALUES
(1, 'เบญจวรรณ', 'user1', '3b712de48137572f3849aabd5666a4e3'),
(2, 'กิติยา', 'user2', '3083202a936b7d0ef8b680d7ae73fa1a'),
(3, 'สุรดี', 'user3', 'b0c7ae2316c7e8214fd659e4bc8a0dea');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `clear`
--
ALTER TABLE `clear`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `pdfemale`
--
ALTER TABLE `pdfemale`
  ADD PRIMARY KEY (`fm_id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`pt_id`);

--
-- Indexes for table `p_brand`
--
ALTER TABLE `p_brand`
  ADD PRIMARY KEY (`pd_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `clear`
--
ALTER TABLE `clear`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `o_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pdfemale`
--
ALTER TABLE `pdfemale`
  MODIFY `fm_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `pt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `p_brand`
--
ALTER TABLE `p_brand`
  MODIFY `pd_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
