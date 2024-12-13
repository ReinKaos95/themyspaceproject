--
-- PostgreSQL database dump
--

-- Dumped from database version 11.12 (Debian 11.12-0+deb10u1)
-- Dumped by pg_dump version 11.12 (Debian 11.12-0+deb10u1)

-- Started on 2022-01-26 19:58:27 -04

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 197 (class 1259 OID 28990)
-- Name: bands; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.bands (
    id SERIAL NOT NULL,
    nombre character varying(60),
    descripcion character varying(255),
    comments character varying(255)
);


ALTER TABLE public.bands OWNER TO postgres;

--
-- TOC entry 196 (class 1259 OID 28988)
-- Name: bands_bandas_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.bands_bandas_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.bands_bandas_seq OWNER TO postgres;

--
-- TOC entry 2904 (class 0 OID 0)
-- Dependencies: 196
-- Name: bands_bandas_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.bands_bandas_seq OWNED BY public.bands.bandas;


--
-- TOC entry 2775 (class 2604 OID 28993)
-- Name: bands bandas; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.bands ALTER COLUMN bandas SET DEFAULT nextval('public.bands_bandas_seq'::regclass);


--
-- TOC entry 2898 (class 0 OID 28990)
-- Dependencies: 197
-- Data for Name: bands; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.bands (bandas, nombre, descripcion) FROM stdin;
1	Bring me the Horizon	British Band formed in 2001
2	Asking Alexandria	British Band formed in 2003
3	Salt The Wound	American Band formed in 2003
4	50 Caliber	British Band formed in 1997
5	SeeYouSpaceCowboy	American Band formed in 2016
6	Underneath the Gun	American Band formed in 2004
7	Bleak December	American Band formed in 2002
8	A Day to Remember	American Band formed in 2003
9	(The) Plasmarifle	Canadian Band formed in 2004
\.


--
-- TOC entry 2905 (class 0 OID 0)
-- Dependencies: 196
-- Name: bands_bandas_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.bands_bandas_seq', 1, false);


-- Completed on 2022-01-26 19:58:28 -04

--
-- PostgreSQL database dump complete
--
