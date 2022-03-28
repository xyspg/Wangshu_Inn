import type { NextPage } from 'next'
import Head from 'next/head'
import Image from 'next/image'

const Home: NextPage = () => {
  return (
    <div className="flex min-h-screen flex-col items-center justify-center py-2">
      <Head>
        <p class='text-center text-4xl p-4'>望舒客栈</p>
      </Head>

      <main className="flex w-full flex-1 flex-col items-center justify-center px-20 text-center">

      </main>

      <footer className="flex h-24 w-full items-center justify-center border-t">

      </footer>
    </div>
  )
}

export default Home
