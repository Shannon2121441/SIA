// Authorization token that must have been created previously. See : https://developer.spotify.com/documentation/web-api/concepts/authorization
const token = 'BQCDoykspeP9IKJHJCbeL2Yc3bMMQpCZnWoLpW4HDku5tPeE8aK0E4W-6aopXl005Tdr1T7tTZ_X1ahgKCJNFtbF15636-wgIqsPFP2VP9K-S4GhE-6tL07oF6-IfhJ17LYGTnh9cDSKGQK6XioceoXx4Qm-_ChMBcITLNjot4se-yEofk6pyg92MHGTNk4HGFkWICxs7oQcH8UnC6mErFppfdfH7krao8qduAUEy9a6-BWOHPWApmaMLS_Gswj0BM-UBGv5DHNWGajP9et7';
async function fetchWebApi(endpoint, method, body) {
  const res = await fetch(`https://api.spotify.com/${endpoint}`, {
    headers: {
      Authorization: `Bearer ${token}`,
    },
    method,
    body:JSON.stringify(body)
  });
  return await res.json();
}

async function getTopTracks(){
  // Endpoint reference : https://developer.spotify.com/documentation/web-api/reference/get-users-top-artists-and-tracks
  return (await fetchWebApi(
    'v1/me/top/tracks?time_range=long_term&limit=5', 'GET'
  )).items;
}

const topTracks = await getTopTracks();
console.log(
  topTracks?.map(
    ({name, artists}) =>
      `${name} by ${artists.map(artist => artist.name).join(', ')}`
  )
);
const playlistId = '5oC5P7KBuNpP7ZVhf9RFAB';

<iframe
  title="Spotify Embed: Recommendation Playlist "
  src={`https://open.spotify.com/embed/playlist/5oC5P7KBuNpP7ZVhf9RFAB?utm_source=generator&theme=0`}
  width="100%"
  height="100%"
  style={{ minHeight: '360px' }}
  frameBorder="0"
  allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
  loading="lazy"
/>