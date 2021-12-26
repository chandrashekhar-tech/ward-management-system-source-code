--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = off;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET escape_string_warning = off;

SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: complaint; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE complaint (
    fname character(40) NOT NULL,
    cdate character varying(30),
    compid character varying(7) NOT NULL,
    address character varying(120),
    wnumber character varying(20) NOT NULL,
    cdetails character varying(150) NOT NULL,
    cdesired character varying(50) NOT NULL,
    status character varying(30),
    statusper integer
);


--
-- Name: reg; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE reg (
    name character(40),
    mobile character varying(10),
    gender character(6),
    bday character varying(30),
    email character varying(50),
    username character varying(50) NOT NULL,
    password character varying(50) NOT NULL
);


--
-- Data for Name: complaint; Type: TABLE DATA; Schema: public; Owner: -
--

COPY complaint (fname, cdate, compid, address, wnumber, cdetails, cdesired, status, statusper) FROM stdin;
                                        							\N	\N
maggie                                  	24/02/2020	magu	sambhaji nagar	19	cd 	hubby	wait 3 months	55
megha mam                               	24/02/2020	megha	talegaon	05	Power failure	solve the issue	work in process	30
Chandrashekhar Dodmani                  	23/2/2020	CH123	chinchwad	1234	water supply problem	add more pipes 	in proccess	40
Chandrashekhar Dodmani                  	25/02/2020	chandu	talegaon	02	power failure\r\n	solve problrm	\N	\N
chandu                                  	20/02/2020	ankush	talegaon	03	power supply failure....	solve problem	in proccess	20
rohit                                   	20/02/2020	rohit	talegaon	03	bhbjhjhhghg	hkkjkkjkjk	\N	\N
\.


--
-- Data for Name: reg; Type: TABLE DATA; Schema: public; Owner: -
--

COPY reg (name, mobile, gender, bday, email, username, password) FROM stdin;
shekhar                                 	9890143091	Male  	1997/2/23	sackdshekhar@gmail.com	shekhar123	shekhar
Shrimant                                	9822537165	Male  	1996/02/26	shrimat133@gmail.com	shrimant1	shrimant
ankush                                  	8796945483	Male  	1997/12/25	ankushzlk@gmail.com	ankush25	ankush
sachin                                  	777773333	Male  	1997/2/25	sachin@gmail.com	sachin25	sachin
                                        		      				
Chandrashekhar                          	9673527390	Male  	1997/09/20	sackdshekhar@outlook.com	admin	myadmin
megha mam                               	4541552	female	1997/12/25	sackdshekhar23@gmail.com	megha	12345
rohit                                   	858555	Male  	2014/4/12	asdfv@gmail.com	rohit	12345
\.


--
-- Name: complaint_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY complaint
    ADD CONSTRAINT complaint_pkey PRIMARY KEY (compid);


--
-- Name: reg_email_key; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY reg
    ADD CONSTRAINT reg_email_key UNIQUE (email);


--
-- Name: reg_mobile_key; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY reg
    ADD CONSTRAINT reg_mobile_key UNIQUE (mobile);


--
-- Name: reg_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY reg
    ADD CONSTRAINT reg_pkey PRIMARY KEY (username);


--
-- Name: public; Type: ACL; Schema: -; Owner: -
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

