import { StyleSheet, Text, View,Image } from 'react-native'
import React from 'react'

export default function ImgenInicial() {
  return (
    <View>
      <Text style={{fontSize: 30, fontWeight: 'bold', color: 'red'}}>Productos</Text>
        <Image source={{uri: 'https://cdn-icons-png.flaticon.com/512/1312/1312307.png'}} style={{width: 112, height: 112}}></Image>
        <Text>{"\n"}</Text>
    </View>
  )
}

const styles = StyleSheet.create({})