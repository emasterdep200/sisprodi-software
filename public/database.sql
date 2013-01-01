
-- --------------------------------------------------------

--
-- Table structure for table `RolTrabajador`
--

CREATE TABLE IF NOT EXISTS RolTrabajador (
  id int NOT NULL AUTO_INCREMENT,
  titulo varchar(255) NOT NULL,
  r_pacientes BOOLEAN NOT NULL,
  u_paciente BOOLEAN NOT NULL,
  d_pacientes BOOLEAN NOT NULL,
  c_pacientes BOOLEAN NOT NULL,
  r_cita BOOLEAN NOT NULL,
  u_cita BOOLEAN NOT NULL,
  d_cita BOOLEAN NOT NULL,
  c_cita BOOLEAN NOT NULL,
  c_persona BOOLEAN NOT NULL,
  r_persona BOOLEAN NOT NULL,
  u_persona BOOLEAN NOT NULL,
  d_persona BOOLEAN NOT NULL,
  PRIMARY KEY (id)
);

