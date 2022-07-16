-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2022 at 12:46 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logistics`
--

-- --------------------------------------------------------

--
-- Table structure for table `cargo`
--

CREATE TABLE `cargo` (
  `cargo_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `weight` double NOT NULL,
  `volume` double NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cargo`
--

INSERT INTO `cargo` (`cargo_id`, `name`, `weight`, `volume`, `qty`) VALUES
(2, 'Бюро', 15, 2, 7),
(3, 'Стол', 10, 0, 7),
(4, 'Скоростна кутия', 15, 0, 1),
(5, 'Монитор', 12, 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `company` varchar(50) NOT NULL,
  `industry` varchar(50) NOT NULL,
  `orders` varchar(50) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `m_email` varchar(50) DEFAULT NULL,
  `m_tel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `company`, `industry`, `orders`, `m_name`, `m_email`, `m_tel`) VALUES
(1, 'Спейс Компютърс ООД', 'ИТ', '12', 'Иван Петров', 'ipetrov@gmail.com', '0839214721'),
(2, 'Идеал Фарма', 'Здравеопазване', '8', 'Петя Петрова', 'ppetrova@gmail.com', '0839234123'),
(3, 'Пропър Карго ЕООД', 'Логистика', '23', 'Недко Добромиров', 'ndobromirov@gmail.com', '0889213712'),
(4, 'Бест тийчърс', 'Образование', '10', 'Ивелина Галинова', 'igalinova@gmail.com', '0839214121'),
(5, 'Софтуер Сълюшънс ООД', 'ИТ', '34', 'Галин Петров', 'gpetrov@gmail.com', '0839214999'),
(6, 'Куул Карс ООД', 'Автомобили', '28', 'Илия Георгиев', 'igeorgiev@gmail.com', '0839214456'),
(7, '1000 Фуудс ООД', 'Хранителна', '30', 'Десислава Петкова', 'dpetkova@abv.bg', '0839211112'),
(8, '9999 Казино ЕАД', 'Хазарт', '45', 'Васил Петров', 'vpetrov@gmail.com', '0889211323'),
(9, 'Спорт Тодей ООД', 'Спорт', '27', 'Георги Иванов', 'givanov@gmail.com', '0839214111'),
(10, 'Интелиджънт Скуулс ООД', 'Образование', '22', 'Петър Петров', 'ppetrov@gmail.com', '0839214433'),
(11, 'Сом Софт ЕООД', 'ИТ', '30', 'Илиян Иванов', 'iivanov@gmail.com', '0889213737');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` int(11) NOT NULL,
  `egn` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `egn`, `name`, `city`, `address`, `email`) VALUES
(2, '8837192317', 'Галин Иванов', 'Варна', 'бул. Трети Март', 'givanov@gmail.com'),
(3, '7891320981', 'Петър Георгиев', 'София', 'бул. Цариградско Шосе', 'pgeorgiev@abv.bg'),
(4, '0012389173', 'Петя Петрова', 'София', 'бул. Левски', 'ppetrova@gmail.com'),
(5, '9821389173', 'Павлина Стоянова', 'София', 'ул. Искър', 'pstoyanova@gmail.com'),
(6, '9721372131', 'Димитър Георгиев', 'Добрич', 'бул. Трети Март', 'dgeorgiev@gmail.com'),
(7, '9912380123', 'Татяна Иванова', 'Добрич', 'бул. Добруджа', 'tivanova@gmail.com'),
(8, '90123803112', 'Лияна Петрова', 'Шумен', 'ул. Зелена Гора', 'lpetrova@gmail.com'),
(9, '8712312312', 'Ивайла Петрова', 'Русе', 'ул. Роса', 'ipetrova@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vehicle_id` int(11) NOT NULL,
  `reg` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `prod` int(11) NOT NULL,
  `mileage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehicle_id`, `reg`, `brand`, `model`, `prod`, `mileage`) VALUES
(1, 'СВ1123AH', 'Mitsubishi', 'L-Truck 17', 2018, '200000'),
(2, 'СВ9821ТХ', 'MAN', 'Cargo S', 2017, '210000'),
(3, 'СВ2313AH', 'Mitsubishi', 'S-Trucks 19', 2020, '100000'),
(4, 'СВ3323AТ', 'Mitsubishi', 'M-Truck 14', 2020, '230000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`cargo_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cargo`
--
ALTER TABLE `cargo`
  MODIFY `cargo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
