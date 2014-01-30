
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE IF NOT EXISTS "songs" (
  "id" int(11) NOT NULL AUTO_INCREMENT,
  "artist" varchar(255) DEFAULT NULL,
  "title" varchar(255) DEFAULT NULL,
  "time" int(6) NOT NULL,
  PRIMARY KEY ("id")
) AUTO_INCREMENT=4 ;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `artist`, `title`, `time`) VALUES
(2, 'artist1', 'song1', 3),
(3, 'artist2', 'song2', 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
