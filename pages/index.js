import Head from 'next/head'
import styles from '../styles/Home.module.css'

export default function Home() {
  return (
    <div className={styles.container}>
      <Head>
        <title>Hendrie Ramdhani</title>
        <meta name="description" content="Hendrie Ramdhani" />
        <link rel="icon" href="/favicon.ico" />
      </Head>
    </div>
  )
}
