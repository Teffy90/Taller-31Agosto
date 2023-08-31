import React, { Component } from 'react';
import { StyleSheet, Text, View, Image, Modal} from 'react-native';
import { Table, Row, Rows } from 'react-native-table-component';

export default class App extends Component {
  constructor(props) {
    super(props);
    this.state = {
      tableHead: ['Producto', 'Nombre', 'Categoria', 'Precio'],
      tableData: [
        [ <Image source={{uri: 'https://images-na.ssl-images-amazon.com/images/I/51wbAAz5O6L.jpg'}} style={{width: 94  , height: 111}}></Image>, 'Iphone 11 red', 'Teléfonos', '$2.600.000'],
        [<Image source={{uri: 'https://www.lenovo.com/medias/lenovo-laptops-thinkpad-t-series-t14s-gen2-black-intel-hero.png?context=bWFzdGVyfC9lbWVhL2ltYWdlcy9wcm9kdWN0cGFnZXMvfDI3Mzk4OHxpbWFnZS9wbmd8L2VtZWEvaW1hZ2VzL3Byb2R1Y3RwYWdlcy9oMjYvaDY1LzE0MzIyOTg0MDI2MTQyLnBuZ3w0MTViMTZmNjljNWQ3ODg2NmU3ZDEwZjRiNTFhZDIyOGI4N2RhNTQ1OWEwNmU1OWY3NTc5NjYyMjc3Zjg5NTQw'}} style={{width: 92  , height: 71}}></Image>, 'Lenovo Thinkpad', 'Computadores', '$1.500.000'],
        [<Image source={{uri: 'https://conectamos.shop/wp-content/uploads/2022/02/samsung_galaxy_s22_ultra_12gb_256gb_negro_01_l.jpg'}} style={{width: 94  , height: 111}}></Image>, 'Samsung S22 Ultra', 'Telefonos', '$3.200.000'],
        [<Image source={{uri: 'https://www.pcfactory.cl/public/landingpage/samsung-galaxy-tab-s7/img/galaxy_tab_s7-1.jpg'}} style={{width: 100  , height: 75}}></Image>, 'Samsung Tab S7 Plus', 'Tablets', '$3.800.000'],
      ]
    }
  }

  render() {
    const state = this.state;
    return (
      <View style={styles.container}>
        <Text style={{fontSize: 30, fontWeight: 'bold', color: 'red'}}>Productos</Text>
        <Image source={{uri: 'https://cdn-icons-png.flaticon.com/512/1312/1312307.png'}} style={{width: 112, height: 112}}></Image>
        <Text>{"\n"}</Text>
        <Text style={{fontSize: 20, fontWeight: 'bold', color: 'blue'}}>Tabla de Productos</Text>
        <Table borderStyle={{borderWidth: 2, borderColor: '#c8e1ff'}}>
          <Row data={state.tableHead} style={styles.head} textStyle={styles.text}/>
          <Rows data={state.tableData} textStyle={styles.text}/>
        </Table>
      </View>
    )
  }
}

const styles = StyleSheet.create({
  container: { flex: 1, padding: 16, paddingTop: 30, backgroundColor: '#fff' },
  head: { height: 40, backgroundColor: '#f1f8ff' },
  text: { margin: 6 }
});