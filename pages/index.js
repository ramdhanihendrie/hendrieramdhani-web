import Head from "next/head";
import Hero from "../components/hero"
import About from "../components/about"
import Projects from "../components/ProjectsSection"
import Contact from "../components/contact"

export default function Index() {
  return (
    <div className="dark:bg-secondary bg-white dark:text-white text-secondary">
      <Head>
        <title>Hendrie Ramdhani</title>
        <meta name="description" content="Hendrie Ramdhani" />
        <link rel="icon" href="/favicon.ico" />
      </Head>
      <Hero />
      <About />
      <Projects />
      <Contact />
    </div>
  )
}
