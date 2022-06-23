import {useRouter} from "next/router";

export default function Artifact( {artifact} ){

    const router = useRouter()
    const { id } = router.query
    return  (<>
            <p>Artifact: {id}</p>
        </>
    )
}

export async function getStaticProps({ params }){
    const req = await fetch('http://localhost:3000/${params.id}.json');
    const data = await req.json();
}