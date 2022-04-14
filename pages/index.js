import Head from "next/head";
import Hero from "../components/hero"
import About from "../components/about"
import Projects from "../components/projects"

export default function Index() {
  return (
    <div className="bg-secondary text-white">
      <Head>
        <title>Hendrie Ramdhani</title>
        <meta name="description" content="Hendrie Ramdhani" />
        <link rel="icon" href="/favicon.ico" />
      </Head>
      <Hero />
      <About />
      <Projects />
    </div>
  )
}
