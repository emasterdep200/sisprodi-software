
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

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE IF NOT EXISTS usuario (
  id int NOT NULL AUTO_INCREMENT,
  nombre varchar(50)  NOT NULL DEFAULT '',
  apellido varchar(50)  NOT NULL DEFAULT '',
  correo varchar(50)  NOT NULL DEFAULT '',
  password varchar(255)  NOT NULL DEFAULT '',
  RolTrabajador int(11) NOT NULL,
  PRIMARY KEY (id),
--  KEY rolUsuario,
  CONSTRAINT rolUsuario_fk FOREIGN KEY (RolTrabajador) REFERENCES RolTrabajador (id) );
--  CONSTRAINT 'rolUsuario_fk' FOREIGN KEY ('rolUsuario') REFERENCES 'RolTrabajador' ('id') );

-- --------------------------------------------------------

--
-- Table structure for table `personas`
--

CREATE TABLE IF NOT EXISTS personas (
  id int  NOT NULL AUTO_INCREMENT,
  nombre varchar(50)  NOT NULL DEFAULT '',
  apellido varchar(50)  NOT NULL DEFAULT '',
  correo varchar(50)  NOT NULL DEFAULT '',
  cedula varchar(20)  NOT NULL,
  fechaNacimiento varchar(20)  NOT NULL DEFAULT '',
  ciudadResidencia varchar(100) NOT NULL DEFAULT '',
  telefono  varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY ( id ) 
);

-- --------------------------------------------------------

--
-- Table structure for table `pacientes`
--

CREATE TABLE IF NOT EXISTS pacientes (
  id int NOT NULL AUTO_INCREMENT,
  tipoDiabetes int(11) NOT NULL,
  enfermedades_asociadas TEXT NOT NULL DEFAULT '',
  peso varchar(30) NOT NULL DEFAULT '',
  talla varchar(30) NOT NULL DEFAULT '',
  complicaciones TEXT NOT NULL DEFAULT '',
  serial varchar(30) NOT NULL DEFAULT '',
  serialCarnet varchar(30) NOT NULL DEFAULT '',
  persona int(11) NOT NULL,
  PRIMARY KEY (id),
--  KEY `usuario_fk`,
  CONSTRAINT paciente_persona_fk FOREIGN KEY (persona) REFERENCES personas (id)
);

-- insert rol job
insert  into RolTrabajador (titulo,r_pacientes,u_paciente,d_pacientes,c_pacientes,r_cita,u_cita,d_cita,c_cita,
c_persona,r_persona,u_persona,d_persona) values 
('Admin',true,true,true,true,true,true,true,true,true,true,true,true);
